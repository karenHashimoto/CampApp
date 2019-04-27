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
            ['id' => '1',
            'camp_name' => 'ぼいぼいキャンプ場',
            'cg_title' => '営何も遮るものがない、大分・くじゅう高原約1万坪もの広大な草原が広がる解放感抜群のキャンプ場！業',
            'cg_subtitle' => '野原のはるか向こうに阿蘇五岳、九州山地が一望出来る贅沢な景色が広がるけるフリーサイトスペース！',
            'reco_text1' => '100万坪の広さを誇るキャンプ場です。お気に入りの場所をみつけてください。',
            'reco_text2' => '流星群が見放題！！！お願い事は１つまでですよ！',
            'reco_text3' => '天然温泉で癒されてください！',
            'state' => '大分県',
            'city' => '竹田市',
            'address' => '久住町大字久住４０４８ー８',
            'phone' => '0940-76-0009',
            'map_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.24Go44Gj44Gx44KJ!5e0!3m2!1sja!2sjp!4v1554697120382!5m2!1sja!2sjp',
            'access_comment' => '大分自動車道玖珠インターから県道３８７号線で宝泉寺温泉を通り国道４４２号線で黒川温泉～瀬の本～ボイボイキャンプ場まで５０分',
            'owner_name' => 'namenamenaem',
            'owner_pic' => 'picpicpic',
            'owner_comment' => '"ボイボイキャンプ場＆カフェボイを夢見てオープンしました。スタッフ一同、皆様のお越しをこころよりお待ちしておリます。"',
            'plan_name' => '広々フリーサイト',
            'plan_comment' => '自由にテントを張っていただけます。',
            'plan_fee' => '2000',
            'max_people' => '5',
            ],
        ]);
    }
}
