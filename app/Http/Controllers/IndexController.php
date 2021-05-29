<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ArticleService;
use App\Service\EventService;
use App\Service\TeacherService;
use App\Service\NewsService;
use App\Service\PresentationService;

class IndexController extends Controller
{
    protected $articleService;

    protected $eventService;

    protected $newsService;

    protected $teacherService;

    protected $presentationService;

    public function __construct(
        ArticleService $articleService,
        EventService $eventService,
        NewsService $newsService,
        PresentationService $presentationService,
        TeacherService $teacherService
    ) {
        $this->articleService = $articleService;
        $this->eventService = $eventService;
        $this->newsService = $newsService;
        $this->teacherService = $teacherService;
        $this->presentationService = $presentationService;
    }

    public function __invoke(?string $path = null)
    {
        $image = \config('app.url') . '/images/og_image.jpg';
        $author = \config('services.meta.author');
        $title = \config('services.meta.title');
        $description = null;

        switch ($path) {
            case null:
                $author = \config('services.meta.title');
                $title = \config('services.meta.author');
                $description = \config('services.meta.description');
                break;

            case 'about/brand':
                $title = '品牌故事';
                $description = '禾場國際芳療學苑是一間專業的芳香療法教學、認證精油及芳香療法相關應用服務公司，'
                    . '公司成立於2003年，當時主要以國際認證芳香療法專業人才培訓為主要業務，多年來培育上千名芳香療法專業人員。'
                    . '芳香治療是一門藝術，也是一門學問，在禾場，我們不斷的挑戰自己，給自己設下更遠大的目標。';
                break;

            case 'about/event':
                $title = '大事記';
                break;

            case (\preg_match('/^about\/event\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $event = $this->eventService->getEvent(\intval($matches[0]));
                $title = $event->title;
                break;

            case 'about/interCert/NAHA/about':
                $title = '關於NAHA';
                $description = 'NAHA是什麼?美國國家整體芳香療法協會TheNationalAssociationforHolisticAromatherapy是一個非營利組織'
                . '，致力於將芳香療法推廣給大家，對象包括一般大眾、相關從業人員、公司企業、產品設計師、作家、教育單位、醫療保健專業人員和媒體，'
                . '並提供有關芳香療法的經驗傳承和最新消息。除此之外，';
                break;

            case 'about/interCert/NAHA/target':
                $title = 'NAHA的使命、願景、目標';
                $description = 'NAHA的使命極力推廣並提升大眾對芳香植物與精油應用於醫療上的相關知識,並使芳香療法成為真正專業的藝術與科學。'
                . 'NAHA的願景NAHA是芳香療法的領導者，積極地將芳香療法教育推廣給一般大眾、公司企業、專業學會與相關業者，來促進和提升整體芳香療法。'
                . 'NAHA的目標促進和推廣芳香療法教育給大眾鼓勵高階芳香療法教育的發展，促進與';
                break;

            case 'about/interCert/NAHA/history':
                $title = 'NAHA的歷史';
                $description = 'NAHA美國國家芳療師協會是由一群在科羅拉多州Boulder市的芳香療法師所發起的，'
                . '創始成員於1990年聚集在美國的科羅拉多州一起學習倫敦芳香療法學院進行的為期10個月的函授課程。'
                . '原本只是幾個志同道合的同學之間的連結，到現在已經成為美國芳療界與世界各地連結的主要觸角。'
                . '第一屆的創會指導委員會由全球芳療界先驅所組成，直到今';
                break;

            case 'about/interCert/NAHA/moral':
                $title = 'NAHA的道德規範標準';
                $description = '所有NAHA會員，學校和教育工作者應：表示承諾為尋求專業服務的人提供最優質的芳香療法服務。對我的客戶，'
                . '芳香療法治療師和同事以及廣大公眾以專業和道德的方式行事，以遵守最高道德行為和正直標準，並在任何情況下都保持我職業的道德。'
                . '與芳香療法專家和同事分享專業知識、研究和經驗，支持芳香療法的發展。避免進行所有類型的知識產權盜竊，';
                break;

            case 'about/interCert/NAHA/training':
                $title = 'NAHA美國國家芳療師訓練標準';
                $description = 'NAHACertifiedLevel1Aromatherapist®Level1認證芳療師最少需完成50小時的課程，並通過考試課程內容：'
                . '芳香療法的歷史介紹。最少20種精油的概況。快樂鼠尾草（Salviasclarea）絲柏（Cupressussempervirens）尤加利'
                . '（Eucalyptusglobulus）天竺葵';
                break;

            case 'about/interCert/NAHA/howToBecome':
                $title = '如何成為NAHA美國國家芳療師協會認可的芳療學校';
                $description = '前言隨著芳香療法行業的發展，作為芳香療法領域的領導組織，我們會不時審查我們的教育標準，以保持最新的安全標準。'
                . '建議您（倡導者，學生或教育者）要定期查看我們的教育標準，熟悉新的準則。重點內容NAHA沒有負責提供審核關於按摩療法的批准程序，'
                . '有關按摩的部分應通過NCBTMB（國家按摩和身體按摩認證委員會）或您所在國家的按摩療法';
                break;

            case 'about/interCert/IFPA/about':
                $title = '關於IFPA';
                $description = '英國最大規模的專業芳療協會兼慈善機構，他們致力推廣健康芳療的原則和理念，促進社會福祉。IFPA由英國RQA、'
                . 'ISPA及IFA的專業芳療師組成，擁有嚴謹的課程研習及認證考試標準，培訓學員成為合格的IFPA臨床芳療師。';
                break;

            case 'about/teamMember':
                $teacher = $this->teacherService->getTeacher(1);
                $title = $teacher->name;
                break;

            case (\preg_match('/^about\/teamMember\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $teacher = $this->teacherService->getTeacher(\intval($matches[0]));
                $title = $teacher->name;
                break;

            case 'news/category/all':
                $title = '所有公告';
                break;

            case (\preg_match('/^news\/category\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $category = $this->newsService->getNewsCategory(\intval($matches[0]));
                $title = "{$category->name}公告";
                break;

            case (\preg_match('/^news\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $news = $this->newsService->getNews(\intval($matches[0]));
                $title = $news->title;
                break;

            case 'course/aromatherapy/elementary':
                $title = '芳療認證入門班 | 防疫優惠版';
                $description = '市面上的精油品牌、芳療師頭銜琳瑯滿目已經是一股熱潮，但為什麼常常在專櫃詢問，卻得不到自己要的答案？'
                . '為什麼我感覺不到精油的神奇療效？精油是大自然生命力的精華如何才能運用在自己身上？無論你是精油新手，或是接觸精油好一陣子的朋友，'
                . '學習芳療的第一步至關重要，選擇適合您的課程以及正確的教學機構，將決定您是否能夠成為一個優秀的芳療';
                break;

            case 'course/aromatherapy/intermediate':
                $title = '芳療認證中階班 | 防疫優惠版';
                $description = '完成了芳香療法入門班之後的下一步，就是芳香療法認證系列課程的芳香療法中階班！在入門班一步一腳印地學習精油、'
                . '純露、植物油等知識後，想要成為一位能夠幫助個案的芳療師，還需要更進一步的準備！中階課程之中，'
                . '延續美國NAHA及英國IFPA芳療師協會的精神，及芳療入門課程的基礎，透過分析植物的解剖構造，我們在芳香療法中階班更進一步';
                break;

            case 'course/aromatherapy/advanced':
                $title = '芳療認證高階班 | 防疫優惠版';
                $description = '雖然，30幾個小時的訓練課程滿足了許多人對芳療的疑問！但對大自然的親近，許多人懷著更深的期待、'
                . '甚至想將這樣的興趣結合在工作之中。學習芳香療法，每個人都有她獨特的動機，在國外，'
                . '很多受過專業訓練的芳香療法執行師選擇讓它成為一種工作、一種服務，但也有許多人將它視為一種珍貴的特質。許多芳療師都有相同的經驗'
                . '，當旁邊朋友們發現他們';
                break;

            case 'course/aromatherapy/clinical':
                $title = '臨床芳療師認證課程';
                $description = '2006年前後，芳療圈開始討論作為臨床、職業或是真正能夠達到專業水準的芳療師，以200個小時作為Level2訓練標準是否足夠'
                . '，於是提出全新架構的Level3這樣的檢討聲浪在NAHA、CFA、IFPA、IFA各大芳療協會皆有著相當的聲量！'
                . '在2017年NAHA正式將Level3的臨床芳療師的專業標準進入委員會的討論，並於2';
                break;

            case 'course/treatment/british':
                $title = '英式芳療按摩療程';
                $description = '力道輕柔節奏和緩容易上手，是兼具舒壓及療效的入門按摩療法。在眾多按摩技法中，英式芳療按摩手法以淋巴引流的架構為主'
                . '，同時帶入部分肌肉按摩的手法，因此按摩時不將力道集中在某一點，而是順淋巴的方向撫按，不但可以達到淋巴引流的排毒效果，'
                . '同時也能在局部肌肉帶來舒緩的效果。英式芳療按摩手法輕柔和緩，不帶傳統按摩的侵略性，但仍然具有';
                break;

            case 'course/treatment/lymphatic':
                $title = '淋巴引流按摩療程';
                $description = '梳理身體免疫網絡喚起自癒本能，是輕如羽毛般撫觸的進階按摩法。淋巴按摩源自西元1930年代歐洲EmileVodder醫師'
                . '，為幫助特定淋巴系統失調疾患而研發的一種徒手治療，運用範圍非常廣泛，包括肌膚健康、運動傷害、偏頭痛、減脂，水腫、身心疲倦等等。'
                . '淋巴系統是人體內重要的免疫及排毒樞紐，一旦運行不暢，淋巴液中的老舊廢棄物也會';
                break;

            case 'course/treatment/facial':
                $title = '顱顏深層按摩療程';
                $description = '調理臉部肌理釋放頭顱壓力，是安撫生命運作核心的局部按摩法。視覺、聽覺、味覺和嗅覺等重要感官神經皆位於頭臉部，'
                . '它的重要性在於表達，同時直觀反應出我們的身心狀態。芳香療法對於使用於淺層臉部與深層頭顱有不同對應處理方式，'
                . '臉部除了可針對肌膚問題選用適當精油給予深層的保養代謝，並且讓已經脆弱的部分得以重建，回復到原生健康的肌膚。';
                break;

            case 'course/treatment/pregnancy':
                $title = '孕產婦芳療療程';
                $description = '減緩孕期媽媽身心不適感，是提升專科知識及技能的按摩法。美國邁阿密醫學院肢體碰觸研究中心於1982年開始，'
                . '藉由科學化的研究發表於國際權威期刊，不斷提出按摩、芳療、精油對於孕婦各種身心症狀有明顯的改善與幫助的證明。在歐美國家，'
                . '懷孕婦女因治療方法的快速進步，得以早一步受益於按摩治療應用在懷孕過程之中，降低了各種懷孕的風險與身';
                break;

            case 'course/treatment/myofascial':
                $title = '肌筋膜系列課程';
                $description = '解開長期反復疼痛的肌肉，是緩解身體酸痛症狀的治療按摩。為什麼肩、頸、背、肘、腰、膝的疼痛，即使已經治療多次，'
                . '仍然還是一再反覆發作？雖然知道自己姿勢不正確，但稍不留意就很容易彎腰、駝背、拱肩，這些問題的根源都是因為「肌筋膜」緊繃所造成的，'
                . '如果包覆肌肉、肌腱和骨骼的「肌筋膜」沒有舒緩展開，就會很快回覆到緊繃狀態拉扯肌肉，自';
                break;

            case 'course/treatment/swedish':
                $title = '瑞典式按摩療程';
                $description = '源自臨床醫療具有學理基礎，是調理肌肉施力不當的正統按摩手法。十九世紀瑞典治療師PerHenrikLing為調理運動員肌肉不適，' .
                '恢復彈性和增進爆發力而發展出一套「按摩與運動系統」，推廣後得到國際認同，而將之稱為「瑞典式按摩與運動療法」，'
                . '這便是現今我們使用瑞典式按摩的雛型。瑞典式按摩以肌肉生理為基礎，主要是順應表層肌肉方向';
                break;

            case 'course/treatment/meridian':
                $title = '經絡按摩療程';
                $description = '梳經理脈順氣調血，是傳承東方古老治療智慧的按摩法。有別於西方醫學重視人體各器官功能運作是否正常，東方中醫則是從'
                . '「經絡暢通」、「氣血平衡」來論斷健康。中醫所講的「經絡」不等同於西醫所指的血管、淋巴管等有形的通路，而是遍布於全身，'
                . '由經脈及絡脈組成的網絡系統。近代科學家更透過研究得知經絡是包覆於肌肉骨骼結締組織的筋膜上。從中';
                break;

            case 'course/online/elementary':
                $title = '直播芳療認證課程入門班';
                $description = '《禾場國際芳療學苑》有錄影直播課程囉！不必舟車勞頓，在家也能學習專業芳香療法課程！疫情影響喚醒大家對身心靈照護的重視'
                . '，越來越多人懂得用精油來維持健康。但市面上的精油品牌琳瑯滿目，卻不知道該如何選擇？為什麼買了精油卻感覺不到它神奇療效？'
                . '要如何運用精油能量在自己和家人身上？想要認識芳香療法卻苦無時間學習？如果你有以上煩惱，';
                break;

            case 'course/online/intermediate':
                $title = '直播芳療認證課程中階班';
                $description = '進階自己《禾場國際芳療學苑》錄影直播課程中階班，不用擔心群聚壓力，讓你在家也能進階專業芳香療法課程！'
                . '完成了芳香療法入門課程之後，下一步，就是進階芳香療法認證系列課程中階班。在入門班學習精油、純露、植物油等基礎知識後，'
                . '想要成為一位能夠幫助個案的芳療師，還需要更進一步的學習！中階課程之中，延續美國NAHA及英國IFPA芳療';
                break;

            case 'course/online/all':
                $title = 'Podcast 線上全階認證課程';
                $description = '芳療線上學習時代來臨！用最效率的方式學習，釋放內心的潛能。人生在不同階段都有不同發展與成長需求，'
                . '學習不需要理由更不分年齡。喜愛精油的你是否曾經思考過，除了本業你還擁有什麼?現在就是你晉升專業芳療技能的最好時機，'
                . '《禾場國際芳療學苑》Podcast 線上全階認證課程，內容以美國NAHA芳療師協會研究多年的系統為架構，融會成立20年以';
                break;

            case 'course/signup':
                $title = '線上報名';
                break;

            case 'course/finish':
                $title = '報名完成';
                break;

            case 'blog/category/all':
                $title = '所有文章';
                break;

            case (\preg_match('/^blog\/category\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $category = $this->articleService->getArticleCategory(\intval($matches[0]));
                $title = $category->name;
                break;

            case (\preg_match('/^blog\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $article = $this->articleService->getArticle(\intval($matches[0]));
                $title = $article->title;
                $image = $article->image ?? \config('app.url') . '/images/blog_default.svg';
                break;

            case 'presentation/category/all':
                $title = '所有分類';
                break;

            case (\preg_match('/^presentation\/category\/[0-9]+$/', $path) ? true : false):
                \preg_match('/[0-9]+$/', $path, $matches);
                $presentation = $this->presentationService->getSymptom(\intval($matches[0]));
                $title = $presentation->name;
                $image = $presentation->image ?? \config('app.url') . '/images/student_default.svg';
                break;
        }

        return view('index', [
            'image' => $image,
            'author' => $author,
            'title' => $title,
            'description' => $description,
        ]);
    }
}
