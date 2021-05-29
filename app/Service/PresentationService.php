<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Presentation;
use App\Models\PhysiologicalSystem;
use App\Models\PresentationSemester;
use App\Models\Symptom;
use Illuminate\Database\Eloquent\Collection;

class PresentationService
{
    public function getPhysiologicalSystems(): Collection
    {
        return PhysiologicalSystem::all();
    }

    public function getSymptom(int $id): Symptom
    {
        return Symptom::find($id);
    }

    public function getSymptoms(): Collection
    {
        return Symptom::with('system')
            ->whereHas('presentations', function ($q) {
                $q->where('visible', true);
            })
            ->get();
    }

    public function getPresentation(int $id): Presentation
    {
        $presentation = Presentation::with(['symptoms', 'videos', 'semester'])->find($id);
        if ($presentation->image) {
            $presentation->image = \config('services.storage.url') . "/storage/presentation/$presentation->image";
        }

        return $presentation;
    }

    public function getPresentations(
        ?string $lastIndex,
        int $limit,
        string $orderBy,
        string $orderDirection,
        ?int $symptomId
    ) {
        $query = PresentationSemester::limit($limit)
            ->with('presentations.videos')
            ->with(['presentations' => function ($q) use ($symptomId) {
                $q->select(['id', 'semester_id', 'name', 'participate', 'ppt'])
                    ->where('visible', true)
                    ->whereHas('symptoms', function ($q) use ($symptomId) {
                        if ($symptomId) {
                            $q->where('id', '=', $symptomId);
                        }
                    });
            }])
            ->whereHas('presentations', function ($q) use ($symptomId) {
                $q->where('visible', true)
                    ->whereHas('symptoms', function ($q) use ($symptomId) {
                        if ($symptomId) {
                            $q->where('id', '=', $symptomId);
                        }
                    });
            });

        if ($orderDirection == 'asc') {
            $query->orderBy($orderBy)->orderBy('id');

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                $query->where(function ($query) use ($orderBy, $lastIndex) {
                    $query->where($orderBy, '>', $lastIndex[0]);
                    $query->orWhere([
                        [$orderBy, '=', $lastIndex[0]],
                        ['id', '>', $lastIndex[1]],
                    ]);
                });
            }
        } else {
            $query->orderByDesc($orderBy)->orderByDesc('id');

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                $query->where(function ($query) use ($orderBy, $lastIndex) {
                    $query->where($orderBy, '<', $lastIndex[0]);
                    $query->orWhere([
                        [$orderBy, '=', $lastIndex[0]],
                        ['id', '<', $lastIndex[1]],
                    ]);
                });
            }
        }

        $semesters = $query->get();
        $length = \count($semesters);

        return [
            'lastIndex' => $length ? "{$semesters[$length - 1]->{$orderBy}},{$semesters[$length - 1]->id}" : null,
            'list' => $semesters
        ];
    }
}
