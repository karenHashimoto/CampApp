<?php

use Illuminate\Database\Seeder;

class CampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('camps')->insert([
            [
                'id' => '1',
                'camp_name' => 'ボイボイキャンプ場',
                'cg_title' => '何も遮るものがない、大分・くじゅう高原約1万坪もの広大な草原が広がる解放感抜群のキャンプ場！',
                'cg_subtitle' => '野原のはるか向こうに阿蘇五岳、九州山地が一望出来る贅沢な景色が広がるオートキャンプ場☆お気に入りの場所を見つけ、自由にテントを張っていただけるフリーサイトスペースが自慢。',
                'reco_text1' => '100万坪の広さを誇るキャンプ場です。お気に入りの場所をみつけてください。',
                'reco_text2' => '流星群が見放題！ただし、お願事は１つまでにしましょう！',
                'reco_text3' => '黒川温泉まで車で15分。その他、温泉もたくさんあります。',
                'state' => '大分県',
                'city' => '竹田市',
                'address' => '久住町大字久住４０４８ー８',
                'phone' => '0940-76-0009',
                'map_link' => 'maplink',
                'access_comment' => '大分自動車道玖珠インターから県道３８７号線で宝泉寺温泉を通り国道４４２号線で黒川温泉～瀬の本～ボイボイキャンプ場まで５０分',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '"ボイボイキャンプ場＆カフェボイを夢見てオープンしました。スタッフ一同、皆様のお越しをこころよりお待ちしておリます。"',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '5,500',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '2',
                'camp_name' => '平尾台自然の郷キャンプ場',
                'cg_title' => 'カルスト台地の開放的なキャンプ場',
                'cg_subtitle' => '芝生の開放的なキャンプ場です。体験工房や遊具、草ソリ場など子供も楽しめるので家族連れにおすすめです。',
                'reco_text1' => '芝生が綺麗に整備されておりとても過ごしやすいです。',
                'reco_text2' => 'ソリスキーなどアスレチックも充実。お子様連れでも安心です。',
                'reco_text3' => '広々としたフリーサイトで寛げます。',
                'state' => '福岡県',
                'city' => '北九州市',
                'address' => '小倉南区平尾台1-1-1',
                'phone' => '0940-76-0009',
                'map_link' => 'maplink',
                'access_comment' => '九州自動車道小倉南ICから国道322号で田川方面へ。 
                平尾台入口交差点で県道28号線に入り、平尾台方面へ進み約20分。',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '芝刈り頑張っています！ぜひ遊びに来てください。',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '3,000',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '3',
                'camp_name' => '大野城いこいの森キャンプ場',
                'cg_title' => '福岡市内から車で約40分♪',
                'cg_subtitle' => '各テントサイトは整備が整っていて水はけも良く、安心して利用出来ます♪',
                'reco_text1' => '整地されたテントサイトなので、初心者の方にも利用できやすいですよ！',
                'reco_text2' => 'アスレチックがあるため、お子様も大喜び！',
                'reco_text3' => '近隣に天拝の郷という、温泉があります。天然温泉で癒されてください！',
                'state' => '福岡県',
                'city' => '大野城市',
                'address' => '大字牛頸667-58',
                'phone' => '092-595-2110',
                'map_link' => 'maplink',
                'access_comment' => '福岡市内から県道31号線を鳥栖方面へ。春日神社入口(マクドナルド有り）の信号を右折し直進。',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => 'スタッフ一同、皆様のお越しを心よりお待ちしています。',
                'plan_name' => '清潔久区画サイトサイト',
                'plan_comment' => '整地された地面にテントを張っていtだきます。',
                'plan_fee' => '3,400',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '4',
                'camp_name' => 'くじゅうエイドステーション',
                'cg_title' => '標高1,000mの飯田高原に位置する、山々に囲まれたキャンプ場です。',
                'cg_subtitle' => 'テント＆タープを1区画に４～５張を設置できる広々とした区画サイトで、また隣の区画と離れているので、開放感を味わえます！各サイトにはコンセルリンクがあり、キャンプの醍醐味、焚火も可能！',
                'reco_text1' => 'テントサイトは５組まで。広々とゆったりお過ごしいただけます。',
                'reco_text2' => '管理人さんが夜も滞在。何かあった時も安心できます。',
                'reco_text3' => 'キャンプファイヤーができます。火を眺めながらゆっくりお酒でも・・・。',
                'state' => '大分県',
                'city' => '玖珠郡',
                'address' => '九重町田野1726-366',
                'phone' => '0940-76-0009',
                'map_link' => 'maplink',
                'access_comment' => '福岡市から大分自動車道九重インター経由２時間',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '飯田高原が大好きで熊本から家族で移住してきました。キャンプ場開業から30年。なんでも聞いてくださいね♫',
                'plan_name' => '5組限定フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '5,500',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '5',
                'camp_name' => '三愛オートキャンプ場',
                'cg_title' => '大分県湯布院水分峠と熊本県一の宮町城山を結ぶ「やまなみハイウェイ」で隣接しています♪
                ',
                'cg_subtitle' => '規模は九州でも最大級！100組が収容できるキャンプサイトは芝のグラウンドを利用しています。',
                'reco_text1' => '約100組収容！広々サイトでゆったり。',
                'reco_text2' => '近隣に温泉も豊富です。疲れた体をいやしましょう！',
                'reco_text3' => '標高が高く、星がたくさん見えます。',
                'state' => '熊本県',
                'city' => '阿蘇郡',
                'address' => '南小国町大字満願寺',
                'phone' => '0967-44-0011
                ',
                'map_link' => 'maplink',
                'access_comment' => '大分自動車道・湯布院ICから約60分',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '黒川温泉にほど近い場所に位置します。ぜひ、お越しください。',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '2000',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '6',
                'camp_name' => 'スパージュ キャンプ場',
                'cg_title' => '1日5組限定！貸切露天風呂でごゆっくり♪',
                'cg_subtitle' => '1日5組限定でゆったりと過ごせるとともに、眺めが抜群！',
                'reco_text1' => '久住高原は「美しすぎる星空10選」に選定され、当キャンプ場からも満点の星空を楽しむことができます',
                'reco_text2' => '流星群が見放題！！！お願い事は１つまでですよ！',
                'reco_text3' => 'トイレやお風呂が綺麗で、安心できます。',
                'state' => '大分県',
                'city' => '竹田市',
                'address' => '久住4026-1赤川温泉スパージュ',
                'phone' => '0974-76-1055',
                'map_link' => 'maplink',
                'access_comment' => '九州自動車道→鳥栖JCT→大分自動車道→日田IC→国道212→国道442→赤川温泉スパージュ・スパージュキャンプ場',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '夫婦二人で経営しています。妻が韓国人で、本場の美味しい韓国家庭料理を食べてください。',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '2000',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '7',
                'camp_name' => '四本堂公園キャンプ場',
                'cg_title' => '海に面した開放的なサイト。大村湾に沈む夕日が絶景です。',
                'cg_subtitle' => '区画も整備され広々スペース。',
                'reco_text1' => '大村湾に沈む夕日をみながら。ゆったりしたひと時を。',
                'reco_text2' => '',
                'reco_text3' => '天然温泉で癒されてください！',
                'state' => '長崎県',
                'city' => '西海市',
                'address' => '西彼町白崎郷',
                'phone' => '0959-37-0222',
                'map_link' => 'maplink',
                'access_comment' => '太宰府ICより２時間30分。',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '海に沈む夕日とBBQをお楽しみください。',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '2000',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '8',
                'camp_name' => '波止岬キャンプ場',
                'cg_title' => '2018年7月リニューアルオープン！海を臨む絶景キャンプ場！',
                'cg_subtitle' => '場内設備も十分揃い、初心者でも安心してキャンプを楽しむことができます。芝生が綺麗に整備され、オート・一般・フリーと1日1組限定のプレミアムサイトから選ぶことができます。',
                'reco_text1' => '目の前の海に沈む夕日は絶景です。',
                'reco_text2' => '設備もフルリニューアル。初心者の方も安心です。',
                'reco_text3' => '海に面しているため、魚釣りも楽しめます。',
                'state' => '佐賀県',
                'city' => '唐津市',
                'address' => '鎮西町名護屋7324',
                'phone' => '0940-76-0009',
                'map_link' => 'maplink',
                'access_comment' => '長崎道多久ICから国道203・204号経由45km1時間30分 ',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '昨年8月にリニューアルしたばかり！きれいなサイトでお待ちしています。',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '2000',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ],
            [
                'id' => '9',
                'camp_name' => '長崎鼻ビーチリゾート',
                'cg_title' => '海蝕洞穴や、敷地に点在するアートや四季折々の花々など楽しみが詰まったキャンプ場です!!
                ',
                'cg_subtitle' => '瀬戸内海国立公園、周防灘に面したリアス式海岸の岬の先端にあるキャンプ場☆',
                'reco_text1' => '透明度が高い海！',
                'reco_text2' => 'sup体験もできます。',
                'reco_text3' => '快適な設備で安心。',
                'state' => '大分県',
                'city' => '豊後高田市',
                'address' => '見目4080',
                'phone' => '0940-76-0009',
                'map_link' => 'maplonk',
                'access_comment' => '豊後高田市から車で30分',
                'owner_name' => 'namenamenaem',
                'owner_pic' => 'picpicpic',
                'owner_comment' => '海の見えるキャンプ場でゆっくりすごしてください！',
                'plan_name' => '広々フリーサイト',
                'plan_comment' => '自由にテントを張っていただけます。',
                'plan_fee' => '2000',
                'max_people' => '5',
                'reception_time' => '13:00〜16:00',
                'checkout_time' => '12:00'
            ]

        ]);
    }
}
