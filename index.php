<?php
ob_start();
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
define('API_KEY','1398698896:AAGfKEdnFsaQ871jFx_Clw2vyVoIKPpiVHo'); 
$admin = "1232898350"; // admin IDsi
$bot= "Uzb_Coderchikbot";
$kanalimz = "@Hacker_Bey";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function put($fayl, $nima)
{
file_put_contents("$fayl", "$nima");
}

function get($fayl)
{
$get = file_get_contents("$fayl");
return $get;
}
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$text = $message->text;
$type = $message->chat->type;
$name = $message->from->first_name;
$uid = $message->from->id;
$user = $message->from->username;
$soat = date("H",strtotime("2 hour"));
$sana = date("d.m.Y",strtotime("2 hour"));
$kun = date("d",strtotime("2 hour"));
$audio = $message->audio;
$reply = $message->reply_to_message->text;
$step=file_get_contents("bot/$cid.step");
$stepp=file_get_contents("step/$cid.step");
mkdir("bot");
mkdir("step");
mkdir("vid");
$nazad="≼≼𝙊𝙧𝙦𝙖𝙜𝙖";
$regi="[$name](tg://user?id=$uid)";
$yil = date("Y",strtotime("2 hour"));
$mid = $message->message_id;
$sreply = $message->reply_to_message->text;  
$sreplyd = $message->reply_to_message->document;

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$nazad"],],
]
]);

$ret1 = bot("getChatMember",[
         "chat_id"=>"@Hacker_Bey", // sirojiddin6326
         "user_id"=>$uid,
         ]);
$stat1 = $ret1->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member")){
}else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"
<b>Assalomu Aleykum <a href='tg://user?id=$uid'>$name</a> Botdan Foydalanish uchun
Quyidagi Kanallarimizga Obuna bo'lishingiz kerak!
A'zo bo'lib /start ni   bosing!
Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
      'reply_markup'=>json_encode([
   'inline_keyboard'=>[
       [['text'=>"📢A'zo Bo'lish🎗","url"=>"https://t.me/Hacker_Bey"]],
]
    ])
    ]);
return false;
  }

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/

$parser = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⛅Ob-Havo🗓"],],
[['text'=>"📅Haftalik Ob-Havo⛅"],['text'=>"🌏Dunyo Virus🦠"],],
[['text'=>"💲Dollar Kursi💲"],['text'=>"🇺🇿Uzbekistan Virus🦠"],],
[['text'=>"🥇Top 🥉 Virus🦠"],['text'=>"🕋Namoz Vaqti🕋"],],
[['text'=>"📱Telefon Yangiliklari🆕️"],['text'=>"$nazad"],],
]
]);
$keys = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔄ᵞᵃᶰᵍᵢᶫᴬᶳᴴ🔄"],['text'=>"📈Statistika📉"],],
[['text'=>"🌌𝐿𝑜𝑔𝑜𝑡𝑖𝑝🌌"],['text'=>"💱𝐕𝐚𝐥𝐲𝐮𝐭𝐚💱"],['text'=>"♻️𝐅𝐚𝐲𝐥 𝐄𝐝𝐢𝐭♻️"],],
[['text'=>"🎄𝗡𝗲𝘄 𝗬𝗲𝗮𝗿❄"],['text'=>"🎶𝑴𝒖𝒔𝒊𝒒𝒂 𝑺𝒆𝒂𝒓𝒄𝒉🔎"],],
[['text'=>"🆕️𝐘𝐚𝐧𝐠𝐢𝐥𝐢𝐤𝐥𝐚𝐫🆕️"],['text'=>"📚𝙄𝙨𝙢 𝙈𝙖'𝙣𝙤𝙨𝙞📚"],],
[['text'=>"𝑪𝒐𝒓𝒐𝒏𝒂𝑽𝒊𝒓𝒖𝒔🦠"],['text'=>"ᴅᴇᴠᴇʟᴏᴘᴇʀ👨‍💻"],['text'=>"🔄𝑲𝒐𝒏𝒗𝒆𝒓𝒕𝒐𝒓🔄"],],
[['text'=>"✏𝐍𝐢𝐜𝐤 𝐘𝐚𝐬𝐚𝐬𝐡✍"],['text'=>"❤𝐒𝐞𝐯𝐠𝐢 𝐓𝐞𝐬𝐭𝐢📋"],],
[['text'=>"📖Quron📖"],['text'=>"📝Malumot👤"],['text'=>"Roza duosi🤲"],],
[['text'=>"🕋Namoz Vaqtlari🕋"],['text'=>"🌡Ob-Havo⛅"],],
[['text'=>"🌍D͛ανℓαтℓαя S͛σαтι⏰"],['text'=>"🌌𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦 𝐅𝐨𝐧"],],
[['text'=>"🇺🇿𝙏𝙚𝙡𝙚𝙜𝙧𝙖𝙢 𝙏𝙞𝙡🔧"],['text'=>"🗞𝙋𝙖𝙧𝙨𝙚𝙧 𝙆𝙤𝙙𝙡𝙖𝙧📃"],],
[['text'=>"🌐Xvest.ru Xaqida Ma'lumot📄"],],
[['text'=>"📝WebHook Sozlamalar"],['text'=>"🗂 Tas-IX Tekshiruv"],],
]
]);

$konvert = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🖼𝙍𝙖𝙨𝙢->𝙎𝙩𝙞𝙘𝙠𝙚𝙧🎯"],['text'=>"🎯𝐒𝐭𝐢𝐜𝐤𝐞𝐫->🖼𝐑𝐚𝐬𝐦"],],
[['text'=>"🎵𝕸𝖕3->𝙑𝖔𝖎𝖈𝖊 🎙"],['text'=>"𝙑𝖔𝖎𝖈𝖊 🎙->𝕸𝖕3🎵"],],
[['text'=>"✏𝗧𝗲𝘅𝘁->𝗩𝗼𝗶𝗰𝗲🎙"],['text'=>"🎵Mp3 Edit🎶"],],
[['text'=>"🎥𝙑𝙞𝙙𝙚𝙤 ➔ 🎵𝙈𝙥𝟑"],['text'=>"🎥𝐕𝐢𝐝𝐞𝐨 ➔ 🎙𝐙𝐚𝐩𝐢𝐬"],],
[['text'=>"🎥𝐕𝐢𝐝𝐞𝐨 ➔ ⭕𝐕𝐢𝐝𝐞𝐨"],['text'=>"$nazad"],],
]
]);
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
$covidmenu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌍𝘿𝙪𝙣𝙮𝙤📊"],],
[['text'=>"📊O'ᴢʙᴇᴋɪꜱᴛᴏɴ🇺🇿"],],
[['text'=>"📶𝗧𝗼𝗽 𝗦𝘁𝗮𝘁𝗶𝘀𝘁𝗶𝗸𝗮📊"],],
[['text'=>"$nazad"],],
]
]);
$viloyat=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Andijon"],['text'=>"Toshkent"],],
[['text'=>"Buxoro"],['text'=>"Guliston"],],
[['text'=>"Jizzax"],['text'=>"Zarafshan"],],
[['text'=>"Qarshi"],['text'=>"Navoi"],],
[['text'=>"Namangan"],['text'=>"Nukus"],],
[['text'=>"Samarqand"],['text'=>"Termiz"],],
[['text'=>"Urganch"],['text'=>"Farg'ona"],],
[['text'=>"Xiva"],['text'=>"$nazad"],],
]
]);
$webhook = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝WebHook📝"],],
[['text'=>"🚫Delete WebHook📝"],],
[['text'=>"🗂Info WebHook📝"],],
[['text'=>"$nazad"],],
]
]);
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
$get = file_get_contents("id.txt");
if(strpos($get,"$cid") !==false){
if(preg_match('/^\/([Ss]tart)/',$text)){
bot('sendMessage',[
   'chat_id'=>$cid,
    'message_id'=>$mid,
'text'=>"📝Marhamat $regi Kerakli 
Menuni Tanlang⬇️",
'parse_mode' => 'markdown',
'reply_markup'=>$keys, 
]);
}
}else{
bot('sendPhoto',[
   'chat_id'=>$cid,
    'message_id'=>$mid,
'photo'=>"https://xvestuzru.xvest.ru/Api/Uzfordbot.php?name=$name&username=$user",
'caption'=>"Assalomu Aleykum $regi
Botimizga Xush Kelibsiz!
Botimizda Turli Xil Siz izlagan
Va Sizga Kerakli Ma'lumotlar Mavjud!

Botda Muammo Chiqsa @Uzb_Coderchik ga Yozing!",
'parse_mode' => 'markdown',
'reply_markup'=>$keys, 
]);
file_put_contents("id.txt","$get\n$cid");
}



/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/

if($text=="🔄𝑲𝒐𝒏𝒗𝒆𝒓𝒕𝒐𝒓🔄"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*🔄Konvertor Menusiga O'tdingiz!

Marhamat Kerakli Menuni Tanlab 
Konvert Qiling!*⬇️",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);
} 
$soat=date("i",strtotime("2 hour"));
if($soat=="50"){
$admin="@Uzb_Coderchik";
foreach($admin as $yy){
bot('sendMessage',[
'chat_id'=>$yy,
'text'=>"😊Assalomu Aleykum ",
'parse_mode'=>'markdown',
]);
}
}
if($text=="🌡Ob-Havo⛅"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"⛅Ob-Havo Bo'limidasiz!
Kerakli Viloyatni tanlang!⬇️",
'reply_markup'=>$viloyat,
]);
}
if($text=="Andijon" or $text=="Samarqand" or $text=="Buxoro" or $text=="Farg'ona" or $text=="Namangan" or $text=="Jizzax" or $text=="Nukus" or $text=="Navoi" or $text=="Guliston" or $text=="Urganch" or $text=="Qarshi" or $text=="Xiva" or $text=="Termiz" or $text=="Zarafshan" or $text=="Toshkent"){ 
$obhavo=file_get_contents("https://xvestuzru.xvest.ru/Parser/OBHAVO.php?text=$text");
$hobhavo=file_get_contents("https://xvestuzru.xvest.ru/Parser/HOBHAVO.php?text=$text");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"⛅Ob-Havo Ma'lumotlari!
➖➖➖➖➖➖
<b>$obhavo
➖➖➖➖
$hobhavo
</b>
➖➖➖➖➖➖➖➖
<i>Ma'lumotlar @$bot Tomonidan Taqdim etildi!</i>
",
'parse_mode'=>'html',
'reply_markup'=>$viloyat, 
]);
}

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
if($text=="📝Malumot👤"){
$getp = file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$uid&limit=1");
$json = json_decode($getp);
$photo = $json->result->photos[0][0]->file_id;
$user=$message->from->username;
$bio=$message->from->about;
if($bio == null){
$bio = "❌Mavjud emas✖";
}else{
$bio = "@$bio";
}
if($user == null){
$user = "❌Mavjud emas✖";
}else{
$user = "@$user";
}
bot('sendPhoto',[ 
'chat_id'=>$cid, 
'photo'=>$photo,
'caption'=>"
<b>👤 Ism:</b> <a href = 'tg://user?id=$cid'>$name</a>
<b>🆔️R͞͞a͞͞q͞͞a͞͞m͞͞</b>: <i>$cid</i>
<b>💫 Username</b>: <i>$user</i>
<b>🔰Bio:</b>  <i>$bio</i>
",
'parse_mode'=>'html',
'reply_markup'=>$keys,
]);
}

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/


if ($text == "🗂 Tas-IX Tekshiruv"){
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"Siz saytlarni Tas-IX tarmog'iga kirishi yoki kirmasligini bilish uchun shu yerga sayt manzilini yuboring:",
]);file_put_contents("step/$cid.step","tasix");
}

if ($stepp == "tasix"){
if($text=="/cancel"){
}else{
$text = str_replace("http://", "", $text);
$text = str_replace("https://", "", $text);
$get = file_get_contents("http://tasix.sarkor.uz/cgi-bin/checker.py?site=".$text);
 if(mb_stripos($get, "Name or service not known") !== false){
bot ('sendmessage',[
'chat_id'=> $cid,
'text'=>"*⚠️ Bunday URL Mavjud Emas*❌",
'reply_to_message_id'=> $mid,
'parse_mode'=>'markdown',
'reply_markup'=> $keys,
]);file_put_contents("step/$cid.step","otmen");
}elseif(mb_stripos($get, "<span><b>НЕ</b> </span>") !== false){
bot ('sendmessage',[
'chat_id'=> $cid,
'text'=>"📛 *$text* Sayti *Tas-IX* Tarmog'iga Kirmaydi❌",
'reply_to_message_id'=> $mid,
'parse_mode'=>'markdown',
'reply_markup'=> $keys,
]);file_put_contents("step/$cid.step","otmen");
}else{
bot ('sendmessage',[
'chat_id'=> $cid,
'text'=>"✅ *$text* Sayti *Tas-IX* Tarmog'iga Kiradi✅",
'reply_to_message_id'=> $mid,
'parse_mode'=>'markdown',
'reply_markup'=> $keys,
]);file_put_contents("step/$cid.step","otmen");
}
}
}

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/

if($text=="🌍D͛ανℓαтℓαя S͛σαтι⏰"){
$timerus=date("H:i",strtotime("0 hour"));
$timeusa = date("H:i",strtotime("-7 hour"));
$timemexico = date("H:i",strtotime("-6 hour"));
$timeitaliya = date("H:i",strtotime("-7 hour"));
$timeturk = date("H:i",strtotime("0 hour"));
$timeuzb = date("H:i", strtotime("2 hour"));
$timeqirgiz = date("H:i", strtotime("3 hour"));
$timedubay = date("H:i", strtotime("1 hour"));
$timelondon = date("H:i", strtotime("-2 hour"));
$timeparij = date("H:i", strtotime("-1 hour"));
$timeuxan = date("H:i", strtotime("5 hour"));
$timeqozoq= date("H:i", strtotime("3 hour"));
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Turli Davlat Soatlari⬇️
➖➖➖➖➖➖➖➖➖➖➖➖➖
🇷🇺Moѕĸva: $timerus
〰️〰️〰️〰️
🇺🇸Uѕa: $timeusa
〰️〰️〰️〰️
🇺🇿U͟zвeĸιѕтan: $timeuzb
〰️〰️〰️〰️
🇵🇼Q͟ozιg'ιѕтon: $timeqozoq
〰️〰️〰️〰️
🇰🇬Q͟ιrg'ιѕzтon: $timeqirgiz
〰️〰️〰️〰️
🇹🇷T͟υrĸιya: $timeturk
〰️〰️〰️〰️
M͟eĸѕιĸa: $timemexico
〰️〰️〰️〰️
🇦🇪D͟υвay: $timedubay
〰️〰️〰️〰️
L͟ondon: $timelondon
〰️〰️〰️〰️
🇨🇳U͟хan: $timeuxan
〰️〰️〰️〰️
🇲🇫P͟arιj: $timeparij
〰️〰️〰️〰️
🇭🇺I͟тalιya: $timeitaliya
➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'parse_mode'=>'markdown',
'reply_markup'=>$keys,
]);
} 
if($text=="🕋Namoz Vaqtlari🕋"){
$namoz=file_get_contents("https://xvestuzru.xvest.ru/Parser/Namoz.php?text=");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*$namoz*

Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'parse_mode'=>'markdown',
'reply_markup'=>$keys,
]);
} 
//restart
if($text=="🔄ᵞᵃᶰᵍᵢᶫᴬᶳᴴ🔄" or $text=="/restart"){
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yangilanmoqda!⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'▫️ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'◽'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'◾'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'◻'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'◼'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'◼'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬜'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'⬛'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'🔅'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔆'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'◾'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔅'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔆'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔅'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔆'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔅'
]);
sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'🔆'
]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "*🌐Barcha Ma'lumotlar Yangilandi!!!✅*",
       'parse_mode'=>'markdown',  
       'reply_markup'=>$keys, 
]);
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
$raqaa=["158","18","274","429","179","111","206","438","259","109","104","184","171","340","281","272","258","74","247","108","357","295","276","146","506","117","97","76","73","77","79","74","70","71","72","75","81","83","94","91","90","95","96","98","99","102","101"]; 
$raqamm=array_rand($raqaa); 
$logon="$raqaa[$raqamm]"; 
if($text=="🌌𝐿𝑜𝑔𝑜𝑡𝑖𝑝🌌"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>" Logo Menusiga Xush Kelibsiz

Logo Yasash Uchun Menga So'z Yuboring!

➖➖➖➖➖➖
@$bot
",
'parse_mode'=>'markdown',
]);put("step/$cid.step","logo");
}
if($stepp=="logo"){
if($text=="/cancel"){
}else{
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 <b>🌌Tayyorlayapman!
Iltimos Biroz Kuting!</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(4);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://xvestuzru.xvest.ru/EPhoto360/api.php?type=$logon&text=$text",
'caption'=>"🌌Logo Tayyor✅
📝Logo So'zi: *$text*

➖➖➖➖➖
*@$bot Tomonidan Logo Yasab Berildi!*
",
'parse_mode'=>'markdown',
'reply_markup'=>$keys,
]);file_put_contents("step/$cid.step","no");
}
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/

//logo tugadi
//CoronaVirus 
if($text=="𝑪𝒐𝒓𝒐𝒏𝒂𝑽𝒊𝒓𝒖𝒔🦠"){
bot('sendPhoto',[
'photo'=>"https://t.me/Hacker_Bey/45",
'chat_id'=>$cid,
'caption'=>"🦠CoronaVirus Statistika Menusiga Kirdingiz!
Kerakli 📊Statistika📊 ni bosing!⬇️
",
'reply_markup'=>$covidmenu,
]);
}
if($text=="🌍𝘿𝙪𝙣𝙮𝙤📊"){
$covid19 = file_get_contents("https://xvestuzru.xvest.ru/Parser/Covid19.php?text=");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$covid19

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'reply_markup'=>$covidmenu,
]);
} 
if($text=="📊O'ᴢʙᴇᴋɪꜱᴛᴏɴ🇺🇿"){
$coviduzb = file_get_contents("https://xvestuzru.xvest.ru/Parser/Covid19Uzb.php?text=");

bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$coviduzb

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'reply_markup'=>$covidmenu,
]);
}
if($text=="📶𝗧𝗼𝗽 𝗦𝘁𝗮𝘁𝗶𝘀𝘁𝗶𝗸𝗮📊"){
$topcovid=file_get_contents("https://xvestuzru.xvest.ru/Parser/Dcovid.php?text=");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$topcovid

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'reply_markup'=>$covidmenu,
]);
}
//covid tugadi

if($text=="📚𝙄𝙨𝙢 𝙈𝙖'𝙣𝙤𝙨𝙞📚"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"👤Ismingizni Yozing!",
'reply_markup'=>$rpl,
]);
}
if($reply=="👤Ismingizni Yozing!"){ 
$nom = file_get_contents("https://ismlar.com/search/$text");
  $exp = explode('<p class="text-size-5">',$nom);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚Ismingiz Ma'nosi📚</b>

<b>🔍Ismingiz:</b>  <i>$text</i>

📑 <b>Manosi:</b> <i>$ismm</i>!",
    'parse_mode'=>'html',
 'reply_markup'=>$keys,
	]);
}
$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
 $link = $item->link;
break;
}
//USHBU KOD 100% @DAMAS_BASS @SIROJIDDIN0426 TOMONIDAN YOZILGAN
//ILTIMOS BU KODNI MANBA SIZ OLMANG
//@SIROJIDDIN6326 KANALI ORQALI TARQATILDI
if($text == "🆕️𝐘??𝐧𝐠𝐢𝐥𝐢𝐤𝐥𝐚𝐫🆕️"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"[$line]($link)

@$bot",
'parse_mode'=>'markdown',
'reply_markup'=>$keys,
'disable_web_page_preview' => true,
]);
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
if($text=="💱𝐕𝐚𝐥𝐲𝐮𝐭𝐚💱"){
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
          if($val->Ccy == 'USD'){
               $response .= "𝟏 USD💵 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "𝟏 EURO💶 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'RUB'){
               $response .= "𝟏 rubl💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "𝟏 Arab Dirhami💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'AUD'){
               $response .= "𝟏 Avstraliya Dollari💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'AZN'){
               $response .= "𝟏 Ozarbayjon Manati💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'BRL'){
               $response .= "𝟏 Braziliya Reali💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'CAD'){
               $response .= "𝟏 Kanada Dollari💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'CHF'){
               $response .= "𝟏 Shveytsariya franki💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "𝟏 Yaponiya Iyenasi💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'KRW'){
               $response .= "𝟏 KoreA Voni💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'ZAR'){
               $response .= "𝟏 Janubiy Afrika Randi💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'YER'){
               $response .= "𝟏 Yaman Riali💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'VND'){
               $response .= "𝟏 Vetnam Songi💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'VES'){
               $response .= "𝟏 Venesuela Bolivari💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'UAH'){
               $response .= "𝟏 Ukraina Hrivnasi💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'UYU'){
               $response .= "𝟏 Urugvay Pesosi💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'TRY'){
               $response .= "𝟏 Turkiya Lirasi💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'TND'){
               $response .= "𝟏 Tunis Dinori💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
           if($val->Ccy == 'TMT'){
               $response .= "𝟏 Turkmaniston Manati💴 - " . $val->Rate . " so'm\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n";
           }
       }
      return $response;
   }   function Parse($p1, $p2, $p3) {
$num1 = strpos($p1, $p2);
if($num1 === false) return 0;
$num2 = substr($p1, $num1);
return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>kurs()."\nSo'ngi Yangilanishlar:  $sana | $soat",
'disable_web_page_preview'=>true,
'reply_markup'=>$back,
]);
}
if($text=="🎄𝗡𝗲𝘄 𝗬𝗲𝗮𝗿❄"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 364;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
  $yyyt="🎅 <b>𝐘𝐚𝐧𝐠𝐢 𝐘𝐢𝐥𝐠𝐚
$b-𝑲𝒖𝒏
$b2-𝑺𝒐𝒂𝒕
$b3-𝑴𝒊𝒏𝒖𝒕
$b4-𝑺𝒆𝒌𝒖𝒏𝒅
𝑸𝒐𝒍𝒅𝒊!</b>
⛄🎇𝙔𝙖𝙣𝙜𝙞 𝙔𝙞𝙡𝙞𝙣𝙜𝙞𝙯 𝘽𝙞𝙡𝙖𝙣🧨";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$yyyt,
    'parse_mode'=>'html',
    'reply_markup'=>$keys,
  ]);
}
mkdir("edit");
$doc=$message->document;
 $doc=$message->document;
$doc_id=$sreplyd->file_id;       
 if(isset($sreplyd)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
$okey = file_put_contents("edit/$text.$type",file_get_contents($file));
if($okey){
bot('sendChatAction', [
'chat_id'=>$cid,
'action'=>"upload_document",
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅Fayl Nomi tahrirlandi✅
Jo'natyapman....",
'parse_mode'=>markdown,
]);  bot('sendDocument',[
          'chat_id'=>$cid,          'document'=>new CURLFile("edit/$text.$type"),
          'thumb'=>$fileid,
      'caption'=>"#By @$bot"
          ]);
unlink("edit/$text.$type");
}
}
if($text == "🎶𝑴𝒖𝒔𝒊𝒒𝒂 𝑺𝒆𝒂𝒓𝒄𝒉🔎"){
bot ('sendmessage', [
'chat_id'=>$cid,
'text'=>"🎵Musiqa Nomini yozing!",
'reply_markup'=>$rpl,
]);
    }
    /*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
if($reply == "🎵Musiqa Nomini yozing!"){
$str1 = str_replace(" ","%20",$text);
$get = file_get_contents("https://muzmo.org/search?q=$str1");
$m = explode('<a class="block" href="/get_new?', $get)[1];
$mk = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m);
$mn = trim(explode("\n",$mk)[0]);
$mf = trim(explode("\n",$mk)[1]);
if ($mf == true){
$mr = file_get_contents("https://muzmo.org/get_new?$mn");
$mb = trim(explode('href="/get/',$mr)[1]);
$md = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb))[0];
$mf = str_replace("&#039;","'",$mf);
$n.= "/1) $mf";
}else{
$n.= "";
}

$m1 = explode('<a class="block" href="/get_new?', $get)[2];
$mk1 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m1);
$mn1 = trim(explode("\n",$mk1)[0]);
$mf1 = trim(explode("\n",$mk1)[1]);
if ($mf1 == true){
$mr1 = file_get_contents("https://muzmo.org/get_new?$mn1");
$mb1 = trim(explode('href="/get/',$mr1)[1]);
$md1 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb1))[0];
$mf1 = str_replace("&#039;","'",$mf1);
$n1.= "/2) $mf1";
}else{
$n1.= "";
}

$m2 = explode('<a class="block" href="/get_new?', $get)[3];
$mk2 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m2);
$mn2 = trim(explode("\n",$mk2)[0]);
$mf2 = trim(explode("\n",$mk2)[1]);
if ($mf2 == true){
$mr2 = file_get_contents("https://muzmo.org/get_new?$mn2");
$mb2 = trim(explode('href="/get/',$mr2)[1]);
$md2 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb3))[0];
$mf2 = str_replace("&#039;","'",$mf2);
$n2.= "/3) $mf2";
}else{
$mn2.= "";
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
$m3 = explode('<a class="block" href="/get_new?', $get)[4];
$mk3 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m3);
$mn3 = trim(explode("\n",$mk3)[0]);
$mf3 = trim(explode("\n",$mk3)[1]);
if ($mf3 == true){
$mr3 = file_get_contents("https://muzmo.org/get_new?$mn3");
$mb3 = trim(explode('href="/get/',$mr3)[1]);
$md3 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb3))[0];
$mf3 = str_replace("&#039;","'",$mf3);
$n3.= "/4) $mf3";
}else{
$n3.= "";
}

$m4 = explode('<a class="block" href="/get_new?', $get)[5];
$mk4 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m4);
$mn4 = trim(explode("\n",$mk4)[0]);
$mf4 = trim(explode("\n",$mk4)[1]);
if ($mf4 == true){
$mr4 = file_get_contents("https://muzmo.org/get_new?$mn4");
$mb4 = trim(explode('href="/get/',$mr4)[1]);
$md4 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb4))[0];
$mf4 = str_replace("&#039;","'",$mf4);
$n4.= "/5) $mf4";
}else{
$n4.= "";
}

$m5 = explode('<a class="block" href="/get_new?', $get)[6];
$mk5 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m5);
$mn5 = trim(explode("\n",$mk5)[0]);
$mf5 = trim(explode("\n",$mk5)[1]);
if ($mf5 == true){
$mr5 = file_get_contents("https://muzmo.org/get_new?$mn5");
$mb5 = trim(explode('href="/get/',$mr5)[1]);
$md5 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb5))[0];
$mf5 = str_replace("&#039;","'",$mf5);
$n5.= "/6) $mf5";
}else{
$n5.= "";
}

$m6 = explode('<a class="block" href="/get_new?', $get)[7];
$mk6 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m6);
$mn6 = trim(explode("\n",$mk6)[0]);
$mf6 = trim(explode("\n",$mk6)[1]);
if ($mf6 == true){
$mr6 = file_get_contents("https://muzmo.org/get_new?$mn6");
$mb6 = trim(explode('href="/get/',$mr6)[1]);
$md6 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb6))[0];
$mf6 = str_replace("&#039;","'",$mf6);
$n6.= "/7) $mf6";
}else{
$n6.= "";
}

$m7 = explode('<a class="block" href="/get_new?', $get)[8];
$mk7 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m7);
$mn7 = trim(explode("\n",$mk7)[0]);
$mf7 = trim(explode("\n",$mk7)[1]);
if ($mf7 == true){
$mr7 = file_get_contents("https://muzmo.org/get_new?$mn7");
$mb7 = trim(explode('href="/get/',$mr7)[1]);
$md7 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb7))[0];
$mf7 = str_replace("&#039;","'",$mf7);
$n7.= "/8) $mf7";
}else{
$n7.= "";
}

$m8 = explode('<a class="block" href="/get_new?', $get)[9];
$mk8 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m8);
$mn8 = trim(explode("\n",$mk8)[0]);
$mf8 = trim(explode("\n",$mk8)[1]);
if ($mf8 == true){
$mr8 = file_get_contents("https://muzmo.org/get_new?$mn8");
$mb8 = trim(explode('href="/get/',$mr8)[1]);
$md8 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb8))[0];
$mf8 = str_replace("&#039;","'",$mf8);
$n8.= "/9) $mf8";
}else{
$n8.= "";
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
$m9 = explode('<a class="block" href="/get_new?', $get)[10];
$mk9 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m9);
$mn9 = trim(explode("\n",$mk9)[0]);
$mf9 = trim(explode("\n",$mk9)[1]);
if ($mf9 == true){
$mr9 = file_get_contents("https://muzmo.org/get_new?$mn9");
$mb9 = trim(explode('href="/get/',$mr9)[1]);
$md9 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb9))[0];
$mf9 = str_replace("&#039;","'",$mf9);
$n9.= "/10) $mf9";
}else{
$n9.= "";
}
if($mf!=false){
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"🎶 $text bo'yicha qidiruv natijalari:

$n
$n1
$n2
$n3
$n4
$n5
$n6
$n7
$n8
$n9

Quyidagi tartib raqamlardan birini bosing bot sizga bu qo'shiqlarni yuboradi",
]);
file_put_contents("bot/$cid.txt","\nhttps://muzmo.org/get/$md\nhttps://muzmo.org/get/$md1\nhttps://muzmo.org/get/$md2\nhttps://muzmo.org/get/$md3\nhttps://muzmo.org/get/$md4\nhttps://muzmo.org/get/$md5\nhttps://muzmo.org/get/$md6\nhttps://muzmo.org/get/$md7\nhttps://muzmo.org/get/$md8\nhttps://muzmo.org/get/$md9");
file_put_contents("bot/$cid.step","music");
}else{
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"Siz izlagan musiqa mavjud emas!",
'reply_markup'=>$keys,
]);
unlink("bot/$cid.step");
}
}

if($step == "music"){
if($text == "/1" or $text == "/2" or $text == "/3" or $text == "/4" or $text == "/5" or $text == "/6" or $text == "/7" or $text == "/8" or $text == "/9" or $text == "/10"){
$str = str_replace("/","",$text);
$exp = explode("\n",$txt)[$str];
if($exp == true){
bot ('sendaudio',[
'chat_id'=>$cid,
'audio'=>$exp,
'caption'=>"@$bot",
'reply_markup'=>$keys,
]);
unlink("bot/$cid.step");
unlink("bot/$cid.txt");
}else{
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yuklashni imkoni bo'lmadi.",
'reply_markup'=>$keys,
]);
unlink("bot/$cid.step");
}
}else{
unlink("bot/$cid.step");
}
}
if($text=="$nazad"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🏠Bosh Menu ga qaytdingiz✅",
'parse_mode'=>'html',
'reply_markup'=>$keys,
]);
}
//nick
if($text == "✏𝐍𝐢𝐜𝐤 𝐘𝐚𝐬𝐚𝐬𝐡✍"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"✏*Nick Yasash Uchun Menga So'z Yuboring*


Botimiz: @$bot ",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","nik");
}
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MF_nik = $text;
$MF_nik = str_replace('a', 'ⓐ', $MF_nik);
$MF_nik = str_replace('b', 'ⓑ', $MF_nik);
$MF_nik = str_replace('c', '©', $MF_nik);
$MF_nik = str_replace('d', 'ⓓ', $MF_nik);
$MF_nik = str_replace('e', 'ⓔ', $MF_nik);
$MF_nik = str_replace('f', 'ⓕ', $MF_nik);
$MF_nik = str_replace('g', 'ⓖ', $MF_nik);
$MF_nik = str_replace('h', 'ⓗ', $MF_nik);
$MF_nik = str_replace('i', 'ⓘ', $MF_nik);
$MF_nik = str_replace('j', 'ⓙ', $MF_nik);
$MF_nik = str_replace('k', 'ⓚ', $MF_nik);
$MF_nik = str_replace('l', 'ⓛ', $MF_nik);
$MF_nik = str_replace('m', 'ⓜ', $MF_nik);
$MF_nik = str_replace('n', 'ⓝ', $MF_nik);
$MF_nik = str_replace('o', 'ⓞ', $MF_nik);
$MF_nik = str_replace('p', 'ⓟ', $MF_nik);
$MF_nik = str_replace('q', 'ⓠ', $MF_nik);
$MF_nik = str_replace('r', 'ⓡ', $MF_nik);
$MF_nik = str_replace('s', 'ⓢ', $MF_nik);
$MF_nik = str_replace('t', 'ⓣ', $MF_nik);
$MF_nik = str_replace('u', 'ⓤ', $MF_nik);
$MF_nik = str_replace('v', 'ⓥ', $MF_nik);
$MF_nik = str_replace('w', 'ⓦ', $MF_nik);
$MF_nik = str_replace('x', 'ⓧ', $MF_nik);
$MF_nik = str_replace('y', 'ⓨ', $MF_nik);
$MF_nik = str_replace('z', 'ⓩ', $MF_nik);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MF_nik",
'reply_markup'=>$nicks, 
]);
}
}
//2 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MrDG = $text;
$MrDG = str_replace('a', 'Ā', $MrDG);
$MrDG = str_replace('b', '乃', $MrDG);
$MrDG = str_replace('c', 'Ċ', $MrDG);
$MrDG = str_replace('d', 'Ɖ', $MrDG);
$MrDG = str_replace('e', 'Ē', $MrDG);
$MrDG = str_replace('f', '₣', $MrDG);
$MrDG = str_replace('g', 'Ǥ', $MrDG);
$MrDG = str_replace('h', 'Ħ', $MrDG);
$MrDG = str_replace('i', 'Ī', $MrDG);
$MrDG = str_replace('j', 'J', $MrDG);
$MrDG = str_replace('k', '₭', $MrDG);
$MrDG = str_replace('l', 'Ŀ', $MrDG);
$MrDG = str_replace('m', 'M', $MrDG);
$MrDG = str_replace('n', '₦', $MrDG);
$MrDG = str_replace('o', 'Ō', $MrDG);
$MrDG = str_replace('p', 'P', $MrDG);
$MrDG = str_replace('q', 'Ǭ', $MrDG);
$MrDG = str_replace('r', 'Ṝ', $MrDG);
$MrDG = str_replace('s', 'Ƨ', $MrDG);
$MrDG = str_replace('t', 'Ŧ', $MrDG);
$MrDG = str_replace('u', 'Ū', $MrDG);
$MrDG = str_replace('v', '∀', $MrDG);
$MrDG = str_replace('w', 'ฬ', $MrDG);
$MrDG = str_replace('x', 'Ж', $MrDG);
$MrDG = str_replace('y', 'Ȳ', $MrDG);
$MrDG = str_replace('z', 'Ƶ', $MrDG);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MrDG",
'reply_markup'=>$nicks, 
]);
}}
//3 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MrDG = $text;
$MrDG = str_replace('a', 'მ', $MrDG);
$MrDG = str_replace('b', 'ჩ', $MrDG);
$MrDG = str_replace('c', 'ƈ', $MrDG);
$MrDG = str_replace('d', 'ძ', $MrDG);
$MrDG = str_replace('e', 'ε', $MrDG);
$MrDG = str_replace('f', 'բ', $MrDG);
$MrDG = str_replace('g', 'ց', $MrDG);
$MrDG = str_replace('h', 'հ', $MrDG);
$MrDG = str_replace('i', 'ἶ', $MrDG);
$MrDG = str_replace('j', 'ʝ', $MrDG);
$MrDG = str_replace('k', 'ƙ', $MrDG);
$MrDG = str_replace('l', 'l', $MrDG);
$MrDG = str_replace('m', 'ო', $MrDG);
$MrDG = str_replace('n', 'ղ', $MrDG);
$MrDG = str_replace('o', 'օ', $MrDG);
$MrDG = str_replace('p', 'ր', $MrDG);
$MrDG = str_replace('q', 'գ', $MrDG);
$MrDG = str_replace('r', 'ɾ', $MrDG);
$MrDG = str_replace('s', 'ʂ', $MrDG);
$MrDG = str_replace('t', 'է', $MrDG);
$MrDG = str_replace('u', 'մ', $MrDG);
$MrDG = str_replace('v', 'ν', $MrDG);
$MrDG = str_replace('w', 'ω', $MrDG);
$MrDG = str_replace('x', 'ჯ', $MrDG);
$MrDG = str_replace('y', 'ყ', $MrDG);
$MrDG = str_replace('z', 'z', $MrDG);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MrDG",
'reply_markup'=>$nicks, 
]);
}}
//4 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MrDG = $text;
$MrDG = str_replace('a', 'ᴬ', $MrDG);
$MrDG = str_replace('b', 'ᴮ', $MrDG);
$MrDG = str_replace('c', 'ᶜ', $MrDG);
$MrDG = str_replace('d', 'ᴰ', $MrDG);
$MrDG = str_replace('e', 'ᴱ', $MrDG);
$MrDG = str_replace('f', 'ᶠ', $MrDG);
$MrDG = str_replace('g', 'ᴳ', $MrDG);
$MrDG = str_replace('h', 'ᴴ', $MrDG);
$MrDG = str_replace('i', 'ᴵ', $MrDG);
$MrDG = str_replace('j', 'ᴶ', $MrDG);
$MrDG = str_replace('k', 'ᴷ', $MrDG);
$MrDG = str_replace('l', 'ᴸ', $MrDG);
$MrDG = str_replace('m', 'ᴹ', $MrDG);
$MrDG = str_replace('n', 'ᴺ', $MrDG);
$MrDG = str_replace('o', 'ᴼ', $MrDG);
$MrDG = str_replace('p', 'ᴾ', $MrDG);
$MrDG = str_replace('q', 'ᵠ', $MrDG);
$MrDG = str_replace('r', 'ᴿ', $MrDG);
$MrDG = str_replace('s', 'ˁ', $MrDG);
$MrDG = str_replace('t', 'ᵀ', $MrDG);
$MrDG = str_replace('u', 'ᵁ', $MrDG);
$MrDG = str_replace('v', 'ᵛ', $MrDG);
$MrDG = str_replace('w', 'ᵂ', $MrDG);
$MrDG = str_replace('x', 'ˣ', $MrDG);
$MrDG = str_replace('y', 'ʸ', $MrDG);
$MrDG = str_replace('z', 'ᶻ', $MrDG);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MrDG",
'reply_markup'=>$nicks, 
]);
}}
//5 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MrDG = $text;
$MrDG = str_replace('a', '🅐', $MrDG);
$MrDG = str_replace('b', '🅑', $MrDG);
$MrDG = str_replace('c', '🅒', $MrDG);
$MrDG = str_replace('d', '🅓', $MrDG);
$MrDG = str_replace('e', '🅔', $MrDG);
$MrDG = str_replace('f', '🅕', $MrDG);
$MrDG = str_replace('g', '🅖', $MrDG);
$MrDG = str_replace('h', '🅗', $MrDG);
$MrDG = str_replace('i', '🅘', $MrDG);
$MrDG = str_replace('j', '🅙', $MrDG);
$MrDG = str_replace('k', '🅚', $MrDG);
$MrDG = str_replace('l', '🅛', $MrDG);
$MrDG = str_replace('m', '🅜', $MrDG);
$MrDG = str_replace('n', '🅝', $MrDG);
$MrDG = str_replace('o', '🅞', $MrDG);
$MrDG = str_replace('p', '🅟', $MrDG);
$MrDG = str_replace('q', '🅠', $MrDG);
$MrDG = str_replace('r', '🅡', $MrDG);
$MrDG = str_replace('s', '🅢', $MrDG);
$MrDG = str_replace('t', '🅣', $MrDG);
$MrDG = str_replace('u', '🅤', $MrDG);
$MrDG = str_replace('v', '🅥', $MrDG);
$MrDG = str_replace('w', '🅦', $MrDG);
$MrDG = str_replace('x', '🅧', $MrDG);
$MrDG = str_replace('y', '🅨', $MrDG);
$MrDG = str_replace('z', '🅩', $MrDG);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MrDG",
'reply_markup'=>$nicks, 
]);
}}
//6 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MrDG = $text;
$MrDG = str_replace('a', '🄰', $MrDG);
$MrDG = str_replace('b', '🄱', $MrDG);
$MrDG = str_replace('c', '🄲', $MrDG);
$MrDG = str_replace('d', '🄳', $MrDG);
$MrDG = str_replace('e', '🄴', $MrDG);
$MrDG = str_replace('f', '🄵', $MrDG);
$MrDG = str_replace('g', '🄶', $MrDG);
$MrDG = str_replace('h', '🄷', $MrDG);
$MrDG = str_replace('i', '🄸', $MrDG);
$MrDG = str_replace('j', '🄹', $MrDG);
$MrDG = str_replace('k', '🄺', $MrDG);
$MrDG = str_replace('l', '🄻', $MrDG);
$MrDG = str_replace('m', '🄼', $MrDG);
$MrDG = str_replace('n', '🄽', $MrDG);
$MrDG = str_replace('o', '🄾', $MrDG);
$MrDG = str_replace('p', '🄿', $MrDG);
$MrDG = str_replace('q', '🅀', $MrDG);
$MrDG = str_replace('r', '🅁', $MrDG);
$MrDG = str_replace('s', '🅂', $MrDG);
$MrDG = str_replace('t', '🅃', $MrDG);
$MrDG = str_replace('u', '🅄', $MrDG);
$MrDG = str_replace('v', '🅅', $MrDG);
$MrDG = str_replace('w', '🅆', $MrDG);
$MrDG = str_replace('x', '🅇', $MrDG);
$MrDG = str_replace('y', '🅈', $MrDG);
$MrDG = str_replace('z', '🅉', $MrDG);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MrDG",
'reply_markup'=>$nicks, 
]);
}}
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$MrDG = $text;
$MrDG = str_replace('a', '🅰', $MrDG);
$MrDG = str_replace('b', '🅱', $MrDG);
$MrDG = str_replace('c', '🅲', $MrDG);
$MrDG = str_replace('d', '🅳', $MrDG);
$MrDG = str_replace('e', '🅴', $MrDG);
$MrDG = str_replace('f', '🅵', $MrDG);
$MrDG = str_replace('g', '🅶', $MrDG);
$MrDG = str_replace('h', '🅷', $MrDG);
$MrDG = str_replace('i', '🅸', $MrDG);
$MrDG = str_replace('j', '🅹', $MrDG);
$MrDG = str_replace('k', '🅺', $MrDG);
$MrDG = str_replace('l', '🅻', $MrDG);
$MrDG = str_replace('m', '🅼', $MrDG);
$MrDG = str_replace('n', '🅽', $MrDG);
$MrDG = str_replace('o', '🅾', $MrDG);
$MrDG = str_replace('p', '🅿', $MrDG);
$MrDG = str_replace('q', '🆀', $MrDG);
$MrDG = str_replace('r', '🆁', $MrDG);
$MrDG = str_replace('s', '🆂', $MrDG);
$MrDG = str_replace('t', '🆃', $MrDG);
$MrDG = str_replace('u', '🆄', $MrDG);
$MrDG = str_replace('v', '🆅', $MrDG);
$MrDG = str_replace('w', '🆆', $MrDG);
$MrDG = str_replace('x', '🆇', $MrDG);
$MrDG = str_replace('y', '🆈', $MrDG);
$MrDG = str_replace('z', '🆉', $MrDG);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$MrDG",
'reply_markup'=>$nicks, 
]);file_put_contents("step/$cid.step","otmen");
}}
if($text=="♻️𝐅𝐚𝐲𝐥 𝐄𝐝𝐢𝐭♻️"){
bot('sendPhoto', [
'photo'=>"https://t.me/Hacker_Bey/45",
'chat_id'=>$cid,
'caption'=>"Faylingizni Nomini O'zgartirish uchun Rasmni ko'ring!⬆️

Kanalimiz: @Hacker_Bey",
'parse_mode'=>'html',
'reply_markup'=>$keys,
]);
}
$lichka=file_get_contents("azo.db");
$gruppa=file_get_contents("gr.db");
if($type=="group" or $type=="supergroup"){
if(strpos($gruppa,"$cid") !==false){
}else{
file_put_contents("gr.db","$gruppa\n$cid");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("azo.db","$lichka\n$cid");
}
}
if($text=="📈Statistika📉"){
$lichka=file_get_contents("azo.db");
$lich=substr_count($lichka,"\n");
$gruppa=file_get_contents("gr.db");
$gro=substr_count($gruppa,"\n");
$um=$lich+$gro;
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Guruxlar: <b>$gro</b>
└▶⭕Umumuy: <b>$um</b>

👨‍💻Dasturchi: @Uzb_Coderchik",
'parse_mode' => 'html',
'reply_markup'=>$keys, 
]);
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
mkdir("mp3");
//mp3
//if(isset($message->audio)){
if($text=="🎵Mp3 Edit🎶"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Mp3* Tahrirlash uchun

Menga Mp3 Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","mp3edit");
} 
if($stepp=="mp3edit"){
if($text=="/cancel"){
}else{
$afile_id=$audio->file_id;
$audio=$message->audio;					file_put_contents("mp3/one.txt","null");
		$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$afile_id),true);
					$path=$url['result']['file_path'];
 $file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
		file_put_contents("mp3/$name.mp3",file_get_contents($file));
		bot('sendAudio',[
		'chat_id'=>$cid,
		'audio'=>new CURLFile("mp3/$name.mp3"),
		'performer'=>"@$user",
		'caption'=>"@$bot Tomonidan O'zgartirib Berildi!",
		'reply_markup'=>$konvert,
		]);file_put_contents("step/$cid.step","noo");
		}
}
	//mp3->voice 
	//if(isset($message->audio)){
if($text=="🎵𝕸𝖕3->𝙑𝖔𝖎𝖈𝖊 🎙"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Musiqa*ni *Voice* Ga Aylantirish uchun

Menga Musiqa Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","voice");
} 
if($stepp=="voice"){
if($text=="/cancel"){
}else{
$audio = $message->audio;
$file = $audio->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('mp3/voice.ogg',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch));
    bot('sendVoice',[
'chat_id'=>$cid ,
'voice'=>new CURLFile('mp3/voice.ogg'),
'caption'=>"@$bot
Tomonidan *Mp3* ➖➡️ *Voice* ga O'zgartirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);
    }
    }/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
    //voice->mp3
//if(isset($message->voice)){
if($text=="𝙑𝖔𝖎𝖈𝖊 🎙->𝕸𝖕3🎵"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Voice*ni *Mp3* Ga Aylantirish uchun

Menga Voice(Golos) Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","mp3");
} 
if($stepp=="mp3"){
if($text=="/cancel"){
}else{
$voice = $message->voice;
$file = $voice->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('mp3/mp3.mp3',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch));
    bot('sendAudio',[
'chat_id'=>$cid,
'audio'=> new CURLFile('mp3/mp3.mp3'),
'title'=>$name,
'performer'=>"@$user",
'caption'=>"@$bot
Tomonidan *Voice* ➖➡️ *Mp3* ga O'zgartirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);file_put_contents("step/$cid.step","noo");
    }
    }
//text->voice 
if($text=="✏𝗧𝗲𝘅𝘁->𝗩𝗼𝗶𝗰𝗲🎙"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✏Matningizni Yuboring!",
'reply_markup'=>$rpl,
]);
}
if($reply=="✏Matningizni Yuboring!"){
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($text));
 file_put_contents('mp3/voicee.ogg',$vo);
		   bot('sendvoice',[
'chat_id'=>$cid,
'voice'=>new CURLFile('mp3/voicee.ogg'),
'caption'=>"@$bot
Tomonidan *Text* ➖➡️ *Voice* ga O'zgartirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);
}
//sticker 
//if(isset($message->photo)){
if($text=="🖼𝙍𝙖𝙨𝙢->𝙎𝙩𝙞𝙘𝙠𝙚𝙧🎯"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Rasm*ni *Sticker* Ga Aylantirish uchun

Menga Rasm Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","photo");
} 
if($stepp=="photo"){
if($text=="/cancel"){
}else{
$photo = $message->photo;
$filee = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$filee]);
      $patch = $get->result->file_path;
      file_put_contents('vid/stick.png',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch));
    bot('sendsticker',[
'chat_id'=>$cid,
'sticker'=>new CURLFile('vid/stick.png'),
'reply_markup'=>$konvert, 
]);file_put_contents("step/$cid.step","noo");
    }
    }
//rasm
//if(isset($message->sticker)){
if($text=="🎯𝐒𝐭𝐢𝐜𝐤𝐞𝐫->🖼𝐑𝐚𝐬𝐦"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Sticker*ni *Rasm* Ga Aylantirish uchun

Menga Rasm Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","stick");
} 
if($stepp=="stick"){
if($text=="/cancel"){
}else{
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('vid/photo.png',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch));
    bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>new CURLFile('vid/photo.png'),
'caption'=>"@$bot
Tomonidan *Sticker*➖➡️*Rasm* ga Aylantirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]); file_put_contents("step/$cid.step","noo");
    }
    }
if($text == "🎥𝙑𝙞𝙙𝙚𝙤 ➔ 🎵𝙈𝙥𝟑"){
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"🎥*Video* ni *Mp3🎵* ga Aylantirish uchun

Menga Video Yuboring!
",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","vidmp3");
}
if($stepp =="vidmp3"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
file_put_contents("vid/$cid.mp3",file_get_contents($file));
	    bot('sendaudio',[
	    	'chat_id'=>$cid,
	    	'audio'=>new CURLFile("vid/$cid.mp3")
	    ]);file_put_contents("step/$cid.step","otmen");
}
if($text =="🎥𝐕𝐢𝐝𝐞𝐨 ➔ 🎙𝐙𝐚𝐩𝐢𝐬") {
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"🎥*Video* ni  *Golos*🎙 ga Aylantirish uchun

Menga Video Yuboring!",
'parse_mode'=>'markdown',
	]);file_put_contents("step/$cid.step","vidgolos");
}
if($stepp == "vidgolos"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
file_put_contents("vid/$cid.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$cid,
	    	'voice'=>new CURLFile("vid/$cid.ogg")
	    ]);file_put_contents("step/$cid.step","otmen");
}
if($text =="🎥𝐕𝐢𝐝𝐞𝐨 ➔ ⭕𝐕𝐢𝐝𝐞𝐨"){
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"🎥*Oddiy Video* ni ⭕*Yumaloq Video*  ga Aylantirish uchun
		
		Menga Oddiy Video Yuboring!",
		'parse_mode'=>'markdown',
		]);file_put_contents("step/$cid.step","vidnot");
		}
if($stepp =="vidnot"){
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
file_put_contents("vid/$cid.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$cid,
	    	'video_note'=>new CURLFile("vid/$cid.mp4")
	    ]);
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/


if($text=="🇺🇿𝙏𝙚𝙡𝙚𝙜𝙧𝙖𝙢 𝙏𝙞𝙡🔧"){
 bot('sendmessage',[
 'chat_id'=>$cid, 
'reply_to_message_id'=>$mid, 
'text'=>" 🔰Ushbu Menu Orqali Siz *Telegram Tili*ni O'zgartirishingiz mumkin! 
Kerakli Tilni Tanlang va O'rnatib oling! 
➖➖➖➖➖➖➖ 
@$bot Tomonidan Taqdim etildi! ",
 'parse_mode'=>'markdown', 
'reply_markup'=>json_encode([
 'inline_keyboard'=>[ 
[['text'=>"🇺🇿Узбек тили 🇺🇿",'url'=>"https://t.me/setlanguage/uzbekcyr"],], 
[['text'=>"🇺🇿O'zbek Tili🇺🇿",'url'=>"https://t.me/setlanguage/uz-beta"],],
 [['text'=>"🇷🇺Русский Язык 🇷🇺",'url'=>"https://t.me/setlanguage/ru"],],
 [['text'=>"🇺🇸English Language🇺🇸",'url'=>"https://t.me/setlanguage/en"],], 
]
 ]), 
]);
 }
if($text =="🌌𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦 𝐅𝐨𝐧"){
bot('sendMessage',[
'chat_id' =>$cid,
 'text'=> "👮‍♂
<b>Bu Telegram uchun Temalar Rõyxati!
Kerakli TEMA ni Tanlab Ustiga Bosing!
Va O'rnatib oling!</b>
➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'>🌌Telegram Tema1️⃣</a>
➖➖➖➖➖➖➖
<a href='https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ'>🌌Telegram Tema2️⃣</a>
➖➖➖➖➖➖➖
<a href='https://t.me/bg/MiE64ER4AFIBAAAAHQZRZyDCfu0'>🌌Telegram Tema3️⃣</a>
➖➖➖➖➖➖➖
<a href='https://t.me/bg/Br6nNA9WAVIBAAAAe6AHvL7eOMM'>🌌Telegram Tema4️⃣</a>
➖➖➖➖➖➖➖
<a href='https://t.me/bg/MzLRSHubAVIBAAAAqKgYQTObnhw'>🌌Telegram Tema5️⃣</a>
➖➖➖➖➖➖➖
<a href='https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs'>🌌Telegram Tema6️⃣</a>
➖➖➖➖➖➖➖
<a href='https://t.me/bg/EhCMFgys-FEBAAAA04qJyrs1G6M'>🌌Telegram Tema7️⃣</a>
➖➖➖➖➖➖➖➖➖
<i>@$bot
Tomonidan Taqdim Etildi!</i>",
'parse_mode' => 'html',
'disable_web_page_preview' => true,
'reply_markup' =>$keys,
]);
}
mkdir("webhook");
if($text=="📝WebHook📝"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📝WebHook Qilinadigon
Bot  TOKEN ni yuboring!",
]);file_put_contents("step/$cid.step","token");
}
if($stepp=="token"){
if($text=="/cancel"){
}else{
file_put_contents("webhook/$cid.token","$text");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🤖Endi Bot Manzilini Yuboring!
➖➖
Eslatma:
*https://* Siz Manzil Yuboring!
Aks Xolda Bot ishlamasligi mumkin!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","weburl");
}
}
if($stepp=="weburl"){
if($text=="/cancel"){
}else{
file_put_contents("webhook/$cid.url","$text");
$tokenc=file_get_contents("webhook/$cid.token");
$ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $tokenc . "/getwebhookinfo"));
$ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $tokenc . "/getme"));
        //==================
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
file_put_contents("webhook/$cid.user","@$un");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Ma'lumotlarni Tekshiring!
➖➖➖➖➖➖
Bot Name: [$fr](https://t.me/$un)
Bot Username: @$un
Bot Id: [$id](https://t.me/$un)
Bot Token: $tokenc
➖➖➖➖➖➖
To'g'ri bo'lsa *📝SetWebHook⚙* ni Bosing!",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝SetWebHook⚙"],],
]
]),
]);file_put_contents("step/$cid.step","noo");
}
}
if($text=="📝SetWebHook⚙"){
$un=file_get_contents("webhook/$cid.user");
$tokenc=file_get_contents("webhook/$cid.token");
$urlcha=file_get_contents("webhook/$cid.url");
file_get_contents("https://api.telegram.org/bot$tokenc/setwebhook?url=$urlcha");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
*$un* - Botingiz 

*Tokeni*: `$tokenc`

➖➖➖➖➖➖➖➖➖➖➖
*@$bot*
Tomonidan Toliq *WebHook* Qilindi!🔧
➖➖➖➖➖➖➖➖➖➖➖
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook, 
]);
}

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/

if($text=="🌐Xvest.ru Xaqida Ma'lumot📄"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Xvest.ru Sayti Xaqida Ma'lumot Kerak bo'lsa
Pastdagi Tugmani bosing!
➖➖➖➖➖
@$bot
 Tomonidan Taqdim Etildi!",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📄Ma'lumot Olish📝",'url'=>"https://t.me/XvestUzBot"]],
]
]),
]);
}
if($text=="📝WebHook Sozlamalar"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Botingizni *WebHook* Qilish Menusidasiz!
👇Menulardan Foydalanib Botingizni *Ish*ga Tushuring!
➖➖➖➖➖➖
*@$bot
Tomonidan Taqdim Etildi!*
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook,
]);
}
if($text=="🚫Delete WebHook📝"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📝WebHook O'chiriladigon
Bot  TOKEN ni yuboring!",
]);file_put_contents("step/$cid.step","delweb");
}
if($stepp=="delweb"){
if($text=="/cancel"){
}else{
file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"`$text`
Tokeni *WebHook* dan Uzildi
➖➖➖
@$bot
Tomonidan WebHook O'chirildi
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook, 
]);file_put_contents("step/$cid.step","noo");
}
}
if($text=="🗂Info WebHook📝"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Qaysi *Token*  Xaqida Ma'lumot Olmoqchisiz?
Menga *Token*ini Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","infoweb");
}
if($stepp=="infoweb"){
if($text=="/cancel"){
}else{
$ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $text . "/getme"));
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
`$text` ➖ *Token*i Xaqida Ma'lumotlar❗
➖➖➖➖➖➖
Bot Name: [$fr](https://t.me/$un)
Bot Username: @$un
Bot Id: [$id](https://t.me/$un)
Bot Token: $text

➖➖➖➖➖➖
@$bot
Tomonidan Ma'lumot Berildi!
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook, 
]);file_put_contents("step/$cid.step","noo");
}
}
//parser

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/


if($text=="🗞𝙋𝙖𝙧𝙨𝙚𝙧 𝙆𝙤𝙙𝙡𝙖𝙧📃"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🗞Parser Kodlar Menusidasiz!

Marhamat Kerakli Kodni Oling!
➖➖➖➖
Manbasiz Olsangiz
Meni Tuzgan Odam Sizni Itaradi😂
➖➖
👨‍💻Dasturchi: @Uzb_Coderchik
",
'reply_markup'=>$parser,
]);
}
if($text=="⛅Ob-Havo🗓"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/147",
'caption'=>"⛅Ob-Havo Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchik ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
//2
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
//3
if($text=="🌏Dunyo Virus🦠"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/148",
'caption'=>"🦠Dunyo Bo'yicha KoronaVirus Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
//4
if($text=="🇺🇿Uzbekistan Virus🦠"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/146",
'caption'=>"🦠Uzbekistan Bo'yicha KoronaVirus Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
 /*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
//6
if($text=="💲Dollar Kursi💲"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/151",
'caption'=>"💲Dollar Kursi Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
//5
if($text=="🥇Top 🥉 Virus🦠"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/149",
'caption'=>"🦠Top 3 ta O'rin KoronaVirus Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
//6
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
if($text=="🕋Namoz Vaqti🕋"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/145",
'caption'=>"🕋Namoz Vaqtlari Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
//8
if($text=="📱Telefon Yangiliklari🆕️"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/144",
'caption'=>"📱Telefon Yangiliklari Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
if($text=="📅Haftalik Ob-Havo⛅"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/music_mp3_bass/150",
'caption'=>"⛅Haftalik Ob-Havo Parser Kodi!
Manba bilan oling!
Kod @Uzb_Coderchikbot ga Tegishli!
➖➖➖➖➖
Kod *@$bot*
Tomonidan Berildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$parser,
]);
} 
 /*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
//6

if($text=="♨️Bot Tezligi🕹"){
$start_time = round(microtime(true) * 1000);
      $send=  bot('sendmessage', [
                'chat_id' => $cid,
                'text' =>"@Uzb_Coderchikbot Tezligi:",
            ])->result->message_id;
        
                    $end_time = round(microtime(true) * 1000);
                    $time_taken = $end_time - $start_time;
                    bot('editMessagetext',[
                        "chat_id" => $cid,
                        "message_id" => $send,
                        "text" => "@Uzb_Coderchikbot Tezligi:" . $time_taken .  "Ms",
                    ]);
}
$sevgitest = ["1","67","83","96","82","62","02","90","99","98","97","90","70","80","99","41","97","99","100","99","89","88","37","64","90","72","33","81","7","60","62","71","1","93","90","71","98","99"];
$sevgirand = array_rand($sevgitest);
$sevgi = "$sevgitest[$sevgirand]";
if($text=="❤𝐒𝐞𝐯𝐠𝐢 𝐓𝐞𝐬𝐭𝐢📋"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"❤️ *Sevgi Test *😍

❤️ Botimizda Siz O'z Sevgingizni Test Qilib Ko'ring 🤩

➖➖➖➖➖➖
*O'z Ismingizni Yozing!*",
'parse_mode'=>'markdown',
]);put("step/$cid.step","ism1");
}
if($stepp=="ism1"){
if($text=="/cancel"){
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"💞Endi Sevgan Insoningizni
Ismini Yuboring!
",
]);put("step/$cid.step","ism2");
}put("sevgi/$cid.ism1","$text");
}

/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
if($stepp=="ism2"){
if($text=="/cancel"){
}else{
put("sevgi/$cid.ism2","$text");
$ism1=get("sevgi/$cid.ism1");
$ism2=get("sevgi/$cid.ism2");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📌Tekshiryapman!
",
]);
sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'💞💕❤'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'💕❤💞'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'❤💞💕'
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"❤Ismingiz: *$ism1*
❤Sevganingizni Ismi: *$ism2*
➖
💞Orangizdagi Sevgi💞: *$sevgi %*

➖➖➖➖➖
*@$bot Tomonidan Test Qilindi!*
",
'parse_mode'=>'markdown',
'reply_markup'=>$keys, 
]);file_put_contents("step/$cid.step","noo");
}
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
if($text == "Roza duosi🤲"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/141",
'chat_id'=>$cid,
'caption'=>"————————————————————————
Рузада огиз очиш ва йопиш дуолари

Руза тутиш (огиз епиш)
дуоси. Навайту ан асума
совма шахри ромазона
миннал фажри иллал
магриби холисал
лиллоху таолло Аллоху акбар. Амин.
РУЗА (огиз очиш) дуоси.
Аллохума лака сумту ва
бика аманту валайка
тавакалту ва алла
ризика ифтору фагфирли ла гафуру ма
кадамту ва мо ахарту.
Илохим Аллохим кабул
айласин рузангизни.
Амин
————————————————————————",
'parse_mode'=>'html',
'reply_markup'=>$keys,
 ]);
}
if($text == '📖Quron📖'){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/hacker_progi/141",
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🌸🌸Quron haqida🌸🌸
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼon (arab. القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra,
Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), 
„Furqon“ (haq bilan botilning orasini ayiruvchi), 
„Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), 
„Hudo“ (hidoyat), „Muborak“ (barakotli),
 „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), 
„Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), 
„Bashir“ (bashorat beruvchi), 
„Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. 
Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. 
Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.
➖➖➖➖➖➖➖➖➖➖➖➖
Quroning tuzulishi
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼonning boʻlimlari sura deyiladi,
uni shartli ravishda bob bilan taqqoslash mumkin.
Har sura oyatlarga boʻlingan. 
Qurʼon 114 sura, 6236 oyatdan iborat.
Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. 
Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar,
voqealar yohud asosiy qahramon nomi bilan atalgan. 
Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arab.juz, fors. pora)ga boʻlingan.
Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, 
oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. 
Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar —
„Makka suralari“ (610—622 yillar, 90 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 24 sura) ga ajratiladi.
Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.
➖➖➖➖➖➖➖➖➖➖➖➖

",
'reply_markup'=>$keys, 
]);
}
/*
@Uzfordbot original Kod
Manba: @KingsOfPhp 

Bazi bir dost deganimga bergandim
kotlik qildi va tarqatib yubordi yoki sotgan 

xammaga omad @DaMaS_BaSS dan sizlar uchun Sovga
*/
?>
