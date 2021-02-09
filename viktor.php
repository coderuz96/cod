<?php
define('API_KEY','1458997344:AAFhoAASpy0m-v0PzOzPMItQvn2X38MADk');
$admin = "621617473";
$kanal = "-1001439682534";
$kanali = "-1001443638477";
$bot = "MultikName_bot";



define('LOGIN','login96_font');
define('PAROL','Baza1');
define('DBNAME','login96_font');

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

function joinchat($from){
     global $message_id;
     $gett = bot('getChatMember',[
  'chat_id' =>"-1001439682534",
  'user_id' => $from,
  ]);
  $stat = $gett->result->status;
if($stat=="creator" or $stat=="administrator" or $stat=="member"){
      return true;
         }else{
           bot('deleteMessage',[
'chat_id'=>$from,
'message_id'=>$mid-2,
]);
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/53773",
         "chat_id"=>$from,
         "caption"=>"<b>🤖: Men orqali guruhingizda Viktorinalar qilishingiz mumkin

Foydalanishdan avval quyidagi kanallarga obuna bo'ling aks holda bot ishlamaydi❗️

Agar kanallardan chiqib ketsangiz bot ishlamay qoladi shuning uchun kanalni tark etmang❗</b>",
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕Azo bo'lish","url"=>"https://t.me/joinchat/AAAAAFXPz-Y9pwcBvSh8Ng"]],
[["text"=>"✅ Tasdiqlash","callback_data"=>"join"]],
]
]),
]);  
 
return false;
}
}


    $conn = mysqli_connect("localhost", LOGIN, PAROL, DBNAME);
if(!$conn){
  die("xato: ".mysqli_connect_error());
}else{
  echo "Ulanildi</br>";
}

$query3 = mysqli_query($conn,"create table guruhi(
id int(20) auto_increment primary key,
name varchar(400),
user_id varchar(100),
count varchar(20),
username varchar(100),
sana varchar(100)
)");
if($query3){
echo "Jadvali yaratildi</br>";
}else{
echo "Xato $conn->error";
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$type = $update->message->chat->type;
$name = $message->from->first_name;
$from_id = $message->from->id;
$uid = $update->message->from->id;
$mid = $message->message_id;
$username = $update->message->from->username;
$newid = $message->new_chat_member->id;
$new_chat_members = $message->new_chat_member->id;
$chatuser = $message->chat->username;
$title = $update->message->chat->title;
$usern = $update->message->chat->username;

//Reply
$reid = $update->message->reply_to_message->from->id;
$reuser = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$repname = $update->message->reply_to_message->from->first_name;
$id1 = $update->message->reply_to_message->from->id;   
$reply = $message->reply_to_message->text;

//Callback
$data = $update->callback_query->data;
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$name2 = $update->callback_query->from->first_name;

$adminkanal="-1001449102359";

$mem = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$azo = $mem->result;
$good = $json->ok;

$sana = date('⏰H:i  d.m.Y',strtotime('2 hour'));

mkdir("stat");
mkdir("step");
$get = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];


function uz($y){
switch($y){
case '1':
$M = '🥇';
break;
case '2':
$M = '🥈';
break;
case '3':
$M = '🥉';
break;
default;
$M = '🏅';
}
return $M;
}
function  top($chid){
$text = "📊 <b>Hozirgi natijalar</b>\n\n";
$files = glob("ball/$chid/*.db");
foreach ($files as $user) {
$id = str_replace(["ball/$chid/", ".db"], ["",""],$user);
$data[$id] = file_get_contents($user);
}
arsort($data);
$i = 1;
foreach ($data as $id=>$son) {
if ($i > 20)break;
$us = bot ('getChatMember', [
'chat_id'=>$chid,
'user_id'=>$id,
]);
$res = $us->result->user->first_name;
$text .= "<b>$i)</b>".uz($i)." <a href='tg://user?id=$id'>$res</a> <b>- $son</b>\n";
$i++;
}
return $text;
}


$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📖Qo'llanma"]],
[['text'=>"➕Guruh o'rnatish"],['text'=>"📊 Statistika"]],
]
]);
$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Orqaga"],],
]
]);
$yordam = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
   [['text'=>"➕Guruh qo'shish bo'yicha"],['text'=>"📋Guruhda Savol-Javoblar"]],
[['text'=>"🔙Orqaga"]],
]
]);

$gruh = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
   [['text'=>"📧Username orqali"],['text'=>"🆔 ID raqam orqali"]],
[['text'=>"◀Orqaga"]],
]
]);
$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀Orqaga"],],
]
]);

if($text == '/kodi' and $cid == $admin){
$sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i:s', strtotime('2 hour'));
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>new CURLFile(__FILE__),
'caption'=>"@$mybot code

📅$sana ⌚$soat",
'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
]);
}

if($data=="join"){
$check1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$kanal&user_id=$chat_id2"))->result->status;
if($check1 != "member" && $check1 != "creator" && $check1 != "administrator"){
  bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🚫Kechirasiz ,

Siz Kanalimizga azo bolmadingiz",
'show_alert'=>true
]);
}else{
        bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"✅Urraaaa,
Siz kanalimizga azo boldingiz",
'show_alert'=>true
]);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/53773",
'chat_id'=>$chat_id2,
    'caption'=>"*Assalomu Aleykum* [$name2](tg://user?id=$chat_id2)
🤖: *Men orqali Guruhingizda turli hil Savol-Javoblar o'tkazishingiz mumkin
Guruhingizga admin qiling keyin ishni boshlayman😉

Viktorina yoki So'rovnoma otkazmoqchi bolsangiz yoki Guruhga botni ulashni tushinmasangiz pastdagi bo'limlardan foydalanishingiz mumkun*👇",
"parse_mode"=>"markdown",
    'reply_markup'=>$key,
]);
unlink("step/$chat_id2.step"); 
unlink("guruh/poll/$chat_id2.title"); 
unlink("guruh/poll/$chat_id2.raqam"); 
}
}

if($text=="/start"){
	if(joinchat($from_id)=="true"){
		if($type=="private"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/53773",
    'chat_id'=>$cid,
    'caption'=>"*Assalomu Aleykum* [$name](tg://user?id=$chat_id)
🤖: *Men orqali Guruhingizda turli hil Savol-Javoblar o'tkazishingiz mumkin
Guruhingizga admin qiling keyin ishni boshlayman😉

Viktorina yoki So'rovnoma otkazmoqchi bolsangiz yoki Guruhga botni ulashni tushinmasangiz pastdagi bo'limlardan foydalanishingiz mumkun*👇",
"parse_mode"=>"markdown",
    'reply_markup'=>$key,
]);
unlink("step/$cid.step"); 
unlink("guruh/poll/$cid.title"); 
unlink("guruh/poll/$cid.raqam"); 
unlink("guruh/poll/$cid.titl"); 
}
}
}
if(strpos($text,"/start") !==false){
if($type == "group" or $type == "supergroup"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"✋*Assalomu alekum men shu Guruhda ish boshladim*

*Mening buyruqlarim haqida lichkamdan topishingiz mumkun
➖➖➖➖➖➖
⚠️ Bot guruhizga admin bo'magan bo'lsa xoziroq admin qiling bo'lmasa afsuski bot ishlamaydi!*",
"parse_mode"=>"markdown",
]);
}
}


if($text== "📖Qo'llanma"){
	if(joinchat($from_id)=="true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"📑Yordam menyusiga xush kelibsiz!",
'reply_markup'=>$yordam,
]);
}
}
if($text== "➕Guruh qo'shish bo'yicha"){
	if(joinchat($from_id)=="true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"➕Guruh qo'shish bo'yicha qollanma!",
'reply_markup'=>$gruh,
]);
}
}

if ($text== "📋Guruhda Savol-Javoblar"){
	if(joinchat($from_id)=="true"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/53767",
    'chat_id'=>$cid,
    'caption'=>"*📋Guruhda Savol-Javob qilish bo'yicha qollanma👆

✅ To'g'ri javob deb belgilash
❌ Xato javob deb belgilash

Javob bergan odamga Reply (Javob berish) tarzida yuboring*",
'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
  'reply_markup'=>$yordam,
]);
}
}
if ($text== "📧Username orqali"){
	if(joinchat($from_id)=="true"){
bot('sendphoto',[ 
  'chat_id' => $chat_id,
'photo' =>"https://t.me/hacker_progi/53768",
'caption'=>"*👆 Guruhingiz Infosiga o'tib Usernameni ozroq ezib turig saxranit bo'lgach ✅
Botga qaytib yuborin📥

Yoki guruhingiz USERNAMEsini yozib yuboring✍

‼Namuna: @Tanho_Guruhh*",
'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
  'reply_markup'=>$orqa,
]);
}
}
if ($text== "🆔 ID raqam orqali"){
if(joinchat($from_id)=="true"){
bot('sendphoto',[ 
  'chat_id' => $chat_id,
'photo' =>"https://t.me/hacker_progi/53772",
'caption'=>"*Guruhingiz USERNAMEsi bo'lmasa🚫

👆 Guruhingiz Infosiga o'tib Guruh ID raqamiga ezing va nusxa oling ✅
Botga qaytib ID raqamni yuboring 📥*",
'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
  'reply_markup'=>$orqa,
]);
}
}
$userlar = file_get_contents("stat/user.list");
$guruhlar = file_get_contents("stat/group.list");
if($text == "📊 Statistika"){
	if(joinchat($from_id)=="true"){
$sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i', strtotime('2 hour'));
$gru = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gru + $us;
     bot('sendMessage',[
     'chat_id'=>$chat_id,
    'text'=> "┌ *Botimiz natijalari📊*
├ *👤A`zolar*:   $us *dona*
├ *👥Guruhlar*: $gru *dona*
└ *♼Hammasi bo'lib*: $obsh *dona* 

➖➖➖➖➖➖➖
📆 *Bugun sana:* $sana
⏰ *Hozir soat*: $soat ",
     'parse_mode'=>'markdown',
     ]);
unlink("step/$cid.step"); 
unlink("guruh/poll/$cid.title"); 
unlink("guruh/poll/$cid.raqam"); 
unlink("guruh/poll/$cid.titl"); 
     }
}
if($text== "🔙Orqaga"){
	if(joinchat($from_id)=="true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⤵ Bosh menuga qaytingiz!",
'reply_markup'=>$key,
]);
unlink("step/$cid.step"); 
unlink("guruh/poll/$cid.title"); 
unlink("guruh/poll/$cid.raqam"); 
unlink("guruh/poll/$cid.titl"); 
}}

 if($text== "◀Orqaga"){
	if(joinchat($from_id)=="true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"📑Yordam menyusiga xush kelibsiz!",
'reply_markup'=>$yordam,
]);
unlink("step/$cid.step"); 
unlink("guruh/poll/$cid.title"); 
unlink("guruh/poll/$cid.raqam"); 
unlink("guruh/poll/$cid.titl"); 
}
}

if($text=="➕Guruh o'rnatish"){ 
	if(joinchat($from_id)=="true"){
	if($type=="private"){
		mkdir("guruh");
	mkdir("guruh/guruh");
file_put_contents("step/$cid.step","gr");
bot("sendMessage",[ 
"chat_id"=>$cid, 
"text"=>"*Guruh ID raqamini yoki @`Username`sini yuboring*

Agar sizning Guruhingizda @`username` yoq bo'lsa 📑Yordam bo'limidan foydalanishni tavsiya qilamiz", 
"parse_mode"=>"markdown", 
"reply_markup"=>$yordam, 
]); 
         } 
         }
         }
if($step=="gr"){ 
if($text=="📖Qo'llanma" or $text=="➕Guruh o'rnatish" or $text=="📊 Statistika" or $text=="🔙Orqaga" or $text=="➕Guruh qo'shish bo'yicha" or $text=="📋Guruhda Savol-Javoblar" or $text=="📧Username orqali" or $text=="🆔 ID raqam orqali" or $text=="◀Orqaga" or $text=="/start"){
}else{  
if(strpos($text,"@") !==false){
	file_put_contents("guruh/guruh/$cid.txt","$text");
}else{
file_put_contents("guruh/guruh/$cid.txt","-100$text");
}
  $grup = file_get_contents("guruh/guruh/$cid.txt");
$gett= bot ('getChatMember', [
'chat_id'=> $grup,
'user_id'=> $uid
]);
$get = $gett->result->status;
if ($get == "administrator" or $get == "creator"){
bot("sendMessage",[ 
"chat_id"=>$cid, 
"text"=>"✅*Saqalandi*" ,
"parse_mode"=>"markdown", 
'reply_to_message_id'=> $mid,
"reply_markup"=>$key, 
]); 
unlink("step/$cid.step");
}else{
bot ('sendmessage', [
'chat_id'=> $cid,
'parse_mode'=>"markdown",
'text'=>"📛 *Bot yoki Siz guruhda admin emas. Xatolikni to'g'irlab qayta urunib ko'ring!*",
'reply_to_message_id'=> $mid
]);
unlink("guruh/guruh/$cid.txt");
}
}
}



if(isset($text)){
$guruhlar = file_get_contents("stat/group.list");
if($type == "group" or $type == "supergroup"){
if(strpos($guruhlar,"$chat_id") !==false){
}else{
file_put_contents("stat/group.list","$guruhlar\n$chat_id");
}
} 
}
if(isset($text)){
$userlar = file_get_contents("stat/user.list");
if($type=="private"){
if(strpos($userlar,"$chat_id") !==false){
}else{
file_put_contents("stat/user.list","$userlar\n$chat_id");
}
} 
}




if(!empty($update->message->chat->type) and ($update->message->chat->type == "supergroup") or ($update->message->chat->type == "group")){
$query = mysqli_query($conn,"SELECT * FROM guruhi WHERE user_id='".$chat_id."'");
$tek = mysqli_fetch_assoc($query);
if($tek){
}else{
$us = bot('getchat', [
'chat_id'=> $chat_id,
]);
$user = $us->result->username;
$tit = $us->result->title;
mysqli_query($conn,"INSERT INTO guruhi (`name`,`user_id`,`count`, `username`,`sana`) VALUES  ('$tit','$chat_id','$azo','$user','$sana')");
}
}

if($new_chat_members == bot('getMe')->result->id){ 
    $get = bot('getChatMembersCount', ['chat_id' => $chat_id])->result;
    if ($get <= 10) {
        bot('sendMessage', [
            'chat_id' =>$chat_id,
            'text' => "Meni Guruhingizga qo'shishingiz uchun 10 kishidan koproq odam bolish kere🙁🖤",
        ]);
        bot('leaveChat', [
            'chat_id' => $chat_id
        ]);
    } else {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "*🙋Salom barchaga endi men* [$title](tg://user?id=$cid) *guruhi uchun xizmat qilaman

Mening buyruqlarim haqida lichkamdan topishingiz mumkun
➖➖➖➖➖➖
⚠️ Bot guruhizga admin bo'magan bo'lsa xoziroq admin qiling bo'lmasa afsuski bot ishlamaydi!*
➖➖➖➖➖➖
💎Bosh homiy: [@Tik_Topuz]
",
         'parse_mode' => 'markdown',
]);
    }
}


$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
if($chatuser){
$result = "@$chatuser";
}else{
$result = "$getlinkde";
}
if(mb_stripos($text,"/start")!==false){
bot('forwardMessage', [ 
'chat_id'=>$chat_id,
'from_chat_id'=>$kana,
'message_id'=>$chm,
    ]); 
} 
if ($newid == "1458997344"){
$sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i', strtotime('2 hour'));
bot ('SendMessage', [
'chat_id'=>$adminkanal,
'text'=>"✅$mybot <b>Guruhga qo'shishdi:</b>

🔵 <b>Qo'shgan odam:</b> <a href='tg://user?id=$from_id'>$name</a>
🔸<i>Guruh nomi:</i> <b><a href='tg://user?id=$cid'>$title</a> </b>
👥<i>Guruh a'zolar soni:</i> <b>$azo ta</b>
▫️<i>Guruh:</i> $result

📅$sana  ⌚$soat",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);
}

if($type=="group" or $type=="supergroup"){
	if($you == "creator" or $you == "administrator" or $from_id == $admin) {
if($text=="✅"){
	mkdir("ball");
mkdir("ball/$cid");
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => "1458997344",
]);
if($gett->result->status =="member"){
	bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"Guruhda  admin emasman!",
]);
}else{
if(!$id1==null and $from_id!=$id1){
if($reuser!="@mybot"){
	$ball = file_get_contents("ball/$cid/$id1.db");
	$get = $ball+5;
	file_put_contents("ball/$cid/$id1.db","$get");
	$ball = file_get_contents("ball/$cid/$id1.db");
if($ball<0){
file_put_contents("ball/$cid/$id1.db","0");
}
bot('sendMessage', [
'chat_id' => $chat_id, 
'text' => "<a href = 'tg://user?id=$id1'>$repname</a> ga To'g'ri javob uchun 5 ball qo'shildi", 
'parse_mode' => "html"
]);
$reyting = top($cid);
bot("sendMessage",[
"chat_id"=>$cid,
"text"=>$reyting,
"parse_mode"=>"html",
]);
}
}
}
}
}
}


if($type=="group" or $type=="supergroup"){
	if($you == "creator" or $you == "administrator" or $from_id == $admin) {
if($text=="❌"){
	mkdir("ball");
mkdir("ball/$cid");
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => "1458997344",
]);
if($gett->result->status =="member"){
	bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"Guruhda  admin emasman!",
]);
}else{
if($id1!=null and $from_id!=$id){
if($reuser!="@mybot"){
	$ball = file_get_contents("ball/$cid/$id1.db");
	$get = $ball-1;
	file_put_contents("ball/$cid/$id1.db","$get");
	$ball = file_get_contents("ball/$cid/$id1.db");
if($ball<0){
file_put_contents("ball/$cid/$id1.db","0");
}
bot('sendMessage', [
'chat_id' => $chat_id, 
'text' => "<a href = 'tg://user?id=$id1'>$repname</a> noto'g'ri javob uchun 1 ball jarima", 
'parse_mode' => "html"
]);
}
}
}
}
}
}

if($type=="group" or $type=="supergroup"){
if($text=="!my"){ 
$ball = file_get_contents("ball/$cid/$uid.db");
if($ball<0){
file_put_contents("ball/$cid/$id1.db","0");
	}
	bot('sendMessage', [
'chat_id' => $chat_id, 
'text' => "<a href = 'tg://user?id=$from_id'>$name</a> sizning ballingiz soni: <b>$ball</b> ta", 
'parse_mode' => "html",
]);
}
}

