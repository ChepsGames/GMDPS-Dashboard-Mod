<?php
global $dbPath;
include __DIR__."/../../".$dbPath."config/dashboard.php";

$string["homeNavbar"] = "Início";
$string["welcome"] = "Bem Vindo ao ".$gdps.'!';
$string["didntInstall"] = "<div style='color:#47a0ff'><b>Warning!</b> Você não terminou de configurar o Dashboard! Clique aqui para fazer isto</div>";
$string["levelsWeek"] = "Níveis publicados em uma semana";
$string["levels3Months"] = "Níveis publicados em três meses";
$string["footer"] = $gdps.", ".date('Y', time());
$string["tipsAfterInstalling"] = "Bem Vindo ao Dashboard! Umas dicas pós instalação:<br>
1. Parece que novas permissões foram adicionadas ao SQL na tabela de 'roles' do GDPS! Você deveria dar uma olhada nisso...<br>
2. Se você colocar 'icon.png' na pasta 'dashboard', o ícone do seu GDPS aparecerá no canto superior esquerdo!<br>
3. Você deve configurar config/dashboard.php!";
$string["wwygdt"] = "O que fará hoje??";
$string["game"] = "Jogo";
$string["guest"] = "Usuário";
$string["account"] = "Conta";
$string["levelsOptDesc"] = "Ver lista de níveis";
$string["songsOptDesc"] = "Ver lista de músicas";
$string["yourClanOptDesc"] = "Ver a clã: \"%s\"";
$string["clanOptDesc"] = "Ver a lista de clãs";
$string["yourProfile"] = "Seu perfil";
$string["profileOptDesc"] = "Ver seu perfil";
$string["messengerOptDesc"] ="Abrir o messenger";
$string["addSongOptDesc"] = "Adicionar música ao servidor";
$string["loginOptDesc"] = "Entrar em uma conta";
$string["createAcc"] = "Criar conta";
$string["registerOptDesc"] = "Registrar em %s";
$string["downloadOptDesc"] = "Baixar %s";

$string["tryCron"] = "Executar o Cron";
$string["cronSuccess"] = "Sucesso!";
$string["cronError"] = "Erro!";

$string["profile"] = "Perfil";
$string["empty"] = "Vazio...";
$string["writeSomething"] = "Escreva algo!";  
$string["replies"] = "Respostas";
$string["replyToComment"] = "Responde a um comentário";
$string["settings"] = "Configurações";
$string["allowMessagesFrom"] = "Permitir mensagens de...";
$string["allowFriendReqsFrom"] = "Permitir pedido de amizades de...";
$string["showCommentHistory"] = "Mostrar histórico de comentários...";
$string["yourYouTube"] = "Seu canal do YouTube";
$string["yourVK"] = "Sua página no VK";
$string["yourTwitter"] = "Seu perfil no Twitter";
$string["yourTwitch"] = "Seu canal no Twitch";
$string["saveSettings"] = "Salvar configurações";
$string["all"] = "Tudo";
$string["friends"] = "Amigos";
$string["none"] = "Nada";
$string["youBlocked"] = "Este jogador lhe bloqueou!";
$string["cantMessage"] = "Você não pode mandar mensagens para esse jogador!";
  
$string["accountManagement"] = "Gerenciar conta";
$string["changePassword"] = "Mudar senha";
$string["changeUsername"] = "Mudar nome de usuário";
$string["unlistedLevels"] = "Seus níveis não listados";

$string["manageSongs"] = "Gerenciar músicas";
$string["gauntletManage"] = "Gerenciar Gauntlets";
$string["suggestLevels"] = "Níveis sugeridos";

$string["modTools"] = "Ferramentas de moderadores";
$string["leaderboardBan"] = "Banir um usuário";
$string["unlistedMod"] = "Fases não listadas";

$string["reuploadSection"] = "Reupload";
$string["songAdd"] = "Adicionar uma música";
$string["songLink"] = "Adicionar uma música com link";
$string["packManage"] = "Gerenciar map packs";

$string["browse"] = "Navegar";
$string["statsSection"] = "Estatisticas";
$string["dailyTable"] = "Níveis diarios";
$string["modActionsList"] = "Ações de moderadores";
$string["modActions"] = "Moderadores do servidor";
$string["gauntletTable"] = "Lista de Gauntlets";
$string["packTable"] = "Lista de Map Packs";
$string["leaderboardTime"] = "Progresso na Leaderboard";

$string["download"] = "Baixar";
$string["forwindows"] = "Para Windows";
$string["forandroid"] = "Para Android";
$string["formac"] = "Para MacOS";
$string["forios"] = "Para iOS";
$string["third-party"] = "De-Terceiros";
$string["thanks"] = "Obrigado à essas pessoas!";
$string["language"] = "Linguagem";

$string["loginHeader"] = "Bem vindo, %s!";
$string["logout"] = "Sair da conta";
$string["login"] = "Entrar na conta";
$string["wrongNickOrPass"] = "Nome ou senha incorretos!";
$string["invalidid"] = "ID Inválido!";
$string["loginBox"] = "Entrar em conta";
$string["loginSuccess"] = "Você conseguiu entrar em sua conta com êxito!";
$string["loginAlready"] = "Você ja está em sua conta!";
$string["clickHere"] = "Dashboard";
$string["enterUsername"] = "Inserir nome de usuário";
$string["enterPassword"] = "Inserir senha";
$string["loginDesc"] = "Aqui, poderá entrar em sua conta!";

$string["register"] = "Registrar";
$string["registerAcc"] = "Registração de conta";
$string["registerDesc"] = "Registre sua conta!";
$string["repeatpassword"] = "Repetir senha";
$string["email"] = "Email";
$string["repeatemail"] = "Repetir email";
$string["smallNick"] = "Nome de usuário muito curto!";
$string["smallPass"] = "Senha muito curta!";
$string["passDontMatch"] = "Senhas não correspondem!";
$string["emailDontMatch"] = "Emails não correspondem";
$string["registered"] = "Você registrou uma conta com êxito!";
$string["bigNick"] = "Nome de usuário muito grande!";
$string["mailExists"] = "Já existe uma conta registrado usando esse email!";

$string["changePassTitle"] = "Mudar senha";
$string["changedPass"] = "Senha trocado com êxito! Precisará entrar em sua conta novamente.";
$string["wrongPass"] = "Senha incorreta!";
$string["samePass"] = "As senhas são as mesmas!";
$string["changePassDesc"] = "Aqui poderá mudar sua senha!";
$string["oldPassword"] = "Senha;antiga&nbsp";
$string["newPassword"] = "Senha;nova&nbsp";
$string["confirmNew"] = "Confirmar&nbsp;senha";

$string["forcePassword"] = "Forçar mudança de senha";
$string["forcePasswordDesc"] = "Aqui poderá mudar a senha de alguem por força!";
$string["forceNick"] = "Forçar mudança de nome";
$string["forceNickDesc"] = "Aqui poderá mudar o nome de um usuário por força!";
$string["forceChangedPass"] = "A senha de <b>%s</b> foi mudado com êxito!";
$string["forceChangedNick"] = "O nome de usuário de <b>%s</b> foi mudado com êxito!";
$string["changePassOrNick"] = "Mudar senha ou nome de jogador";

$string["changeNickTitle"] = "Mudar nome de usuário";
$string["changedNick"] = "Nome trocado com êxito! Precisará entrar em sua conta novamente.";
$string["wrongNick"] = "Nome de usuário incorreto!";
$string["sameNick"] = "Nomes inseridos são iguais!";
$string["alreadyUsedNick"] = "O nome que você escolheu já está em uso!";
$string["changeNickDesc"] = "Aqui poderá mudar seu nome de usuário!";
$string["oldNick"] = "Nome antigo";
$string["newNick"] = " Nome novo";
$string["password"] = "Senha";

$string["packCreate"] = "Criar um Map Pack";
$string["packCreateTitle"] = "Criar um Map Pack";
$string["packCreateDesc"] = "Aqui poderá criar um Map Pack!";
$string["packCreateSuccess"] = "Você conseguiu criar um map pack com êxito com o nome";
$string["packCreateOneMore"] = "Mais um Map Pack?";
$string["packName"] = "Nome do Map Pack";
$string["color"] = "Cor";
$string["sameLevels"] = "Você escolheu o mesmo nível!";
$string["show"] = "Mostrar";
$string["packChange"] = "Editar Map Pack";
$string["createNewPack"] = "Crie um Map Pack!"; // Translate word "create" like its call to action

$string["gauntletCreate"] = "Criar Gauntlet";
$string["gauntletCreateTitle"] = "Criar Gauntlet";
$string["gauntletCreateDesc"] = "Aqui você pode criar uma Gauntlet!";
$string["gauntletCreateSuccess"] = "Você conseguiu criar uma Gauntlet com êxito!";
$string["gauntletCreateOneMore"] = "Mais uma Gauntlet?";
$string["chooseLevels"] = "Escolher níveis!";
$string["checkbox"] = "Confirmar";
$string["level1"] = "1º nível";
$string["level2"] = "2º nível";
$string["level3"] = "3º nível";
$string["level4"] = "4º nível";
$string["level5"] = "5º nível";
$string["gauntletChange"] = "Editar Gauntlet";
$string["createNewGauntlet"] = "Criar nova Gauntlet!"; // Translate word "create" like its call to action
$string["gauntletCreateSuccessNew"] = 'Você criou <b>%1$s</b> com êxito!';
$string["gauntletSelectAutomatic"] = "Escolher Gauntlet automaticamente";

$string["addQuest"] = "Adicionar uma quest";
$string["addQuestDesc"] = "Aqui pode criar uma quest!";
$string["questName"] = "Nome da quest";
$string["questAmount"] = "Quantidade necessária";
$string["questReward"] = "Recompensa";
$string["questCreate"] = "Criar uma quest";
$string["questsSuccess"] = "Você conseguiu criar uma quest com êxito";
$string["invalidPost"] = "Data inválido!";
$string["fewMoreQuests"] = "É recomendado criar mais algumas quests.";
$string["oneMoreQuest?"] = "Mais uma quest?";
$string["changeQuest"] = "Editar quest";
$string["createNewQuest"] = "Criar nova quest!"; // like gauntlets and mappacks above

$string["levelReupload"] = "Republicar nível";
$string["levelReuploadDesc"] = "Aqui poderá republicar um nível de qualquer servidor!";
$string["advanced"] = "Opções avançadas";
$string["errorConnection"] = "Erro de conexão!";
$string["levelNotFound"] = "Este nível não existe!";
$string["robtopLol"] = "RobTop não gosta de você :c";
$string["sameServers"] = "Servidor host e servidor target são iguais!";
$string["levelReuploaded"] = "Nível republicado! ID do nível:";
$string["oneMoreLevel?"] = "Mais um nível?";
$string["levelAlreadyReuploaded"] = "Nível já republicado!";
$string["server"] = "Servidor";
$string["levelID"] = "ID do nível";
$string["pageDisabled"] = "Esta página está desabilitada!";

$string["activateAccount"] = "Ativação de contas";
$string["activateDesc"] = "Ative sua conta!";
$string["activated"] = "Sua conta foi ativada com êxito!";
$string["alreadyActivated"] = "Sua conta já está ativada";
$string["maybeActivate"] = "Talves você ainda não ativou sua conta.";
$string["activate"] = "Ativar";
$string["activateDisabled"] = "Ativação de contas está desabilitado!";

$string["addMod"] = "Adicionar moderador";
$string["addModDesc"] = "Aqui poderá dar o cargo de moderador!";
$string["modYourself"] = "Você não pode se dar moderador!";
$string["alreadyMod"] = "Este jogador já é moderador!";
$string["addedMod"] = "Você deu um cargo de moderador para um jogador com êxito";
$string["addModOneMore"] = "Mais um moderador?";
$string["modAboveYourRole"] = "Você está tentando se dar um cargo maior do que o seu!";
$string["makeNewMod"] = "Tornar alguem moderador!";
$string["reassignMod"] = "Reatribuir moderador";
$string["reassign"] = "Reatribuir";
$string['demotePlayer'] = "Demitir jogador";
$string['demotedPlayer'] = "Você demitiu o jogador <b>%s</b> com êxito!";
$string['addedModNew'] = "Você promoveu o jogador <b>%s</b> com êxito!";
$string['demoted'] = 'Demitido';

$string["shareCPTitle"] = "Dividir Creator Points";
$string["shareCPDesc"] = "Aqui você pode dividir Creator Points com jogadores!";
$string["shareCP"] = "Share";
$string["alreadyShared"] = "This level already shared CP to this player!";
$string["shareToAuthor"] = "You tried to share CP to level author!";
$string["userIsBanned"] = "This player is banned!";
$string["shareCPSuccess"] = "You successfully shared Creator Points of level";
$string["shareCPSuccess2"] = "to player";
$string["updateCron"] = "Maybe you should update Creator Points.";
$string["shareCPOneMore"] = "One more share?";
$string['shareCPSuccessNew'] = 'You successfully shared Creator Points of level <b>%1$s</b> to player <b>%2$s</b>!';

$string["messenger"] = "Messenger";
$string["write"] = "Write";
$string["send"] = "Send";
$string["noMsgs"] = "Start dialog!";
$string["subject"] = "Subject";
$string["msg"] = "Message";
$string["tooFast"] = "You're typing too fast!";

$string["levelToGD"] = "Reupload level to target server";
$string["levelToGDDesc"] = "Here you can reupload your level to target server!";
$string["usernameTarget"] = "Username for target server";
$string["passwordTarget"] = "Password for target server";
$string["notYourLevel"] = "This is not your level!";
$string["reuploadFailed"] = "Level reupload error!";

$string["search"] = "Search...";
$string["searchCancel"] = "Cancel search";
$string["emptySearch"] = "Nothing found!";

$string["demonlist"] = 'Demonlist';
$string["demonlistRecord"] = '<b>%s</b>\'s record';
$string["alreadyApproved"] = 'Already approved!';
$string["alreadyDenied"] = 'Already denied!';
$string["approveSuccess"] = 'You\'ve successfully approved <b>%s</b>\'s record!';
$string["denySuccess"] = 'You\'ve successfully denied <b>%s</b>\'s record!';
$string["recordParameters"] = '<b>%s</b> has beated <b>%s</b> in <b>%d</b> attempts';
$string["approve"] = 'Approve';
$string["deny"] = 'Deny';
$string["submitRecord"] = 'Submit record';
$string["submitRecordForLevel"] = 'Submit record for <b>%s</b>';
$string["alreadySubmitted"] = 'You\'ve already submitted an record for <b>%s</b>!';
$string["submitSuccess"] = 'You\'ve successfully submitted an record for <b>%s</b>!';
$string["submitRecordDesc"] = 'Submit records only if you beated the level!';
$string["atts"] = 'Attempts';
$string["ytlink"] = 'YouTube video ID (dQw4w9WgXcQ)';
$string["submit"] = 'Submit';
$string["addDemonTitle"] = 'Add demon';
$string["addDemon"] = 'Add demon to demonlist';
$string["addedDemon"] = 'You\'ve been added <b>%s</b> to <b>%d</b> place!';
$string["addDemonDesc"] = 'Here you can add a demon to demonlist!';
$string["place"] = 'Place';
$string["giveablePoints"] = 'Giveable points';
$string["add"] = 'Add';
$string["recordApproved"] = 'Record approved!';
$string["recordDenied"] = 'Record denied!';
$string["recordSubmitted"] = 'Record submitted!';
$string["nooneBeat"] = 'noone has beaten'; //let it be lowercase
$string["oneBeat"] = '1 player has beaten'; 
$string["lower5Beat"] = '%d players have beaten'; // russian syntax, sorry
$string["above5Beat"] = '%d players have beaten'; 
$string["demonlistLevel"] = '%s <text class="dltext">by <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="font-size:25px" class="accbtn" name="accountID" value="%d">%s</button></text>';
$string["noDemons"] = 'It seems that your demonlist doesn\'t have any demons...';
$string["addSomeDemons"] = 'Add some demons to fill up demonlist!';
$string["askForDemons"] = 'Ask server\'s administrator to add some!';
$string["recordList"] = 'List of records';
$string["status"] = 'Status';
$string["checkRecord"] = 'Check record';
$string["record"] = 'Record';
$string["recordDeleted"] = 'Record was deleted!';
$string["changeDemon"] = 'Change demon';
$string["demonDeleted"] = 'Demon was deleted!';
$string["changedDemon"] = 'You replaced <b>%s</b> to <b>%d</b> place!';
$string["changeDemonDesc"] = 'Here you can change a demon!<br>
If you want to delete demon, set place to 0.';

$string["didntActivatedEmail"] = 'You didn\'t activated your account through email!';
$string["checkMail"] = 'You should check your email...';

$string["likeSong"] = "Add song to favourites";
$string["dislikeSong"] = "Remove song from favourites";
$string["favouriteSongs"] = "Favourite songs";
$string["howMuchLiked"] = "How much liked?";
$string["nooneLiked"] = "Noone liked";

$string["clan"] = "Clan";
$string["joinedAt"] = "Joined clan at: <b>%s</b>";
$string["createdAt"] = "Created clan at: <b>%s</b>";
$string["clanMembers"] = "Clan members";
$string["noMembers"] = "No members";
$string["clanOwner"] = "Clan owner";
$string["noClanDesc"] = "<i>No description</i>";
$string["noClan"] = "This clan doesn't exist!";
$string["clanName"] = "Clan name";
$string["clanDesc"] = "Clan description";
$string["clanColor"] = "Clan color";
$string["dangerZone"] = "Danger zone";
$string["giveClan"] = "Give clan";
$string["deleteClan"] = "Delete clan";
$string["goBack"] = "Go back";
$string["areYouSure"] = "Are you sure?";
$string["giveClanDesc"] = "Here you can give your clan to a player.";
$string["notInYourClan"] = "This player is not in your clan!";
$string["givedClan"] = "You successfully gived your clan to <b>%s</b>!";
$string["deletedClan"] = "You deleted clan <b>%s</b>.";
$string["deleteClanDesc"] = "Here you can delete your clan.";
$string["yourClan"] = "Your clan";
$string["members0"] = "<b>1</b> member";
$string["members1"] = "<b>%d</b> members"; 
$string["members2"] = "<b>%d</b> members"; 
$string["noRequests"] = "There is no requests. Chill!";
$string["pendingRequests"] = "Clan requests";
$string["closedClan"] = "Closed clan";
$string["kickMember"] = "Kick member";
$string["leaveFromClan"] = "Leave clan";
$string["askToJoin"] = "Send join request";
$string["removeClanRequest"] = "Delete join request";
$string["joinClan"] = "Join clan";
$string["noClans"] = "There is no clans";
$string["clans"] = "Clans";
$string["alreadyInClan"] = "You're already in clan!";
$string["createClan"] = "Create clan";
$string["createdClan"] = "You successfully created clan <span style='font-weight:700;color:#%s'>%s</span>!";
$string["createClanDesc"] = "Here you can create a clan!";
$string["create"] = "Create";
$string["mainSettings"] = "Main settings";
$string["takenClanName"] = "This clan name was already taken!";

$string["suggestedName"] = '<button type="button" onclick="a(\'profile/%1$s\', true, true)" class="accbtn" name="accountID">%1$s</button><text class="dltext"> suggested <b>%4$s%3$s</b> for</text><text class="levelname">%2$s</text>'; // %1$s - Mod username, %2$s - level name, %3$s - x stars, %4$s - Featured/Epic (%4$s%3$s - Featured, x stars)
$string["reportedName"] = '%1$s<text class="dltext"> was reported</text><text class="levelname">%2$s</text>';

$string['listTable'] = "Lists";
$string['listTableMod'] = "Unlisted lists";
$string['listTableYour'] = "Your unlisted lists";

$string['forgotPasswordChangeTitle'] = "Change password";
$string["successfullyChangedPass"] = "Password was successfully changed!";
$string['forgotPasswordTitle'] = "Forgot password?";
$string['maybeSentAMessage'] = "We'll send you a message if this account exists.";
$string['forgotPasswordDesc'] = "Here you can request change password link if you forgot it!";
$string['forgotPasswordButton'] = "Request link";

/*
	REUPLOAD
*/

$string["reuploadBTN"] = "Upload";
$string["errorGeneric"] = "Error appeared!";
$string["smthWentWrong"] = "Something went wrong!";
$string["tryAgainBTN"] = "Try again";
//songAdd.php
$string["songAddDesc"] = "Here you can add your song!";
$string["songAddUrlFieldLabel"] = "Song URL: (Direct or Dropbox links only)";
$string["songAddUrlFieldPlaceholder"] = "Song URL";
$string["songAddNameFieldPlaceholder"] = "Name";
$string["songAddAuthorFieldPlaceholder"] = "Author";
$string["songAddButton"] = "Choose song";
$string["songAddAnotherBTN"] = "Another Song?";
$string["songAdded"] = "Song added!";
$string["deletedSong"] = "You successfully deleted song";
$string["renamedSong"] = "You successfully renamed song to";
$string["songID"] = "Song ID: ";
$string["songIDw"] = "Song ID";
$string["songAuthor"] = "Author";
$string["size"] = "Size";
$string["delete"] = "Delete";
$string["change"] = "Change";
$string["chooseFile"] = "Choose a song";
$string['yourNewSong'] = "Take a look at your new song!";
///errors
$string["songAddError-2"] = "Invalid URL";
$string["songAddError-3"] = "This song has been reuploaded already with ID:";
$string["songAddError-4"] = "This song isn't reuploadable";
$string["songAddError-5"] = "Song size is higher than $songSize megabytes";
$string["songAddError-6"] = "Something went wrong while uploading a song! :с";
$string["songAddError-7"] = "You can only upload audio!";

$string[400] = "Bad request!";
$string["400!"] = "Check drivers of your network hardware.";
$string[403] = "Forbidden!";
$string["403!"] = "You don't have access to this page!";
$string[404] = "Page not found!";
$string["404!"] = "Are you sure you typed address correctly?";
$string[500] = "Internal server error!";
$string["500!"] = "Coder made an mistake in the code,</br>
please say about this problem here:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "Server is down!";
$string["502!"] = "Load on the server is too big.</br>
Come back later within several hours!";

$string["invalidCaptcha"] = "Invalid captcha response!";
$string["page"] = "Page";
$string["emptyPage"] = "This page is empty!";

/*
	STATS
*/
$string["ID"] = "ID";
$string["orbs"] = "Orbs";
$string["stars"] = "Stars";
$string["coins"] = "Coins";
$string["accounts"] = "Accounts";
$string["levels"] = "Levels";
$string["songs"] = "Songs";
$string["author"] = "Creator";
$string["name"] = "Name";
$string["date"] = "Date";
$string["type"] = "Type";
$string["reportCount"] = "Report count";
$string["reportMod"] = "Reports";
$string["username"] = "Username";
$string["accountID"] = "Account ID";
$string["registerDate"] = "Register date";
$string["levelAuthor"] = "Level author";
$string["isAdmin"] = "Role on server";
$string["isAdminYes"] = "Yes";
$string["isAdminNo"] = "No";
$string["userCoins"] = "User Coins";
$string["time"] = "Time";
$string["deletedLevel"] = "Deleted Level";
$string["mod"] = "Moderator";
$string["count"] = "Amount of actions";
$string["ratedLevels"] = "Rated Levels";
$string["lastSeen"] = "Last Time Online";
$string["level"] = "Level";
$string["pageInfo"] = "Showing page %s of %s";
$string["first"] = "First";
$string["previous"] = "Previous";
$string["next"] = "Next";
$string["never"] = "Never";
$string["last"] = "Last";
$string["go"] = "Go";
$string["levelid"] = "Level ID";
$string["levelname"] = "Level name";
$string["leveldesc"] = "Level description";
$string["noDesc"] = "No description";
$string["levelpass"] = "Password";
$string["nopass"] = "No password";
$string["unrated"] = "Unrated";
$string["rate"] = "Rate";
$string["stats"] = "Stats";
$string["suggestFeatured"] = "Featured?";
$string["whoAdded"] = "Who added?";
//modActionsList
$string["banDesc"] = "Here you can ban a player from leaderboard!";
$string["playerTop"] = 'Top of players';
$string["creatorTop"] = 'Top of creators';

$string["admin"] = "Administrator";
$string["elder"] = "Elder moderator";
$string["moder"] = "Moderator";
$string["player"] = "Player";

$string["starsLevel2"] = "stars";
$string["starsLevel1"] = "stars";
$string["starsLevel0"] = "star";
$string["coins2"] = "coins";
$string["coins1"] = "coins";
$string["coins0"] = "coin";
$string["time0"] = "time";
$string["time1"] = "times";
$string["times"] = "times";
$string["action0"] = "action";
$string["action1"] = "actions";
$string["action2"] = "actions";
$string["lvl0"] = "level";
$string["lvl1"] = "levels";
$string["lvl2"] = "levels";
$string["player0"] = "player";
$string["player1"] = "players";
$string["player2"] = "players";
$string["unban"] = "Unban";
$string["isBan"] = "Ban";

$string["noCoins"] = "Without coins";
$string["noReason"] = "No reason";
$string["noActions"] = "No actions";
$string["noRates"] = "No rates";

$string["future"] = "Future";

$string["spoiler"] = "Spoiler";
$string["accid"] = "with account ID";
$string["banned"] = "was successfully banned!";
$string["unbanned"] = "was successfully unbanned!";
$string["ban"] = "Ban";
$string["nothingFound"] = "This player doesn't exist!";
$string["banUserID"] = "Username or account ID";
$string["banUserPlace"] = "Ban a user";
$string["banYourself"] = "You can't ban yourself!"; 
$string["banYourSelfBtn!"] = "Ban someone else";
$string["banReason"] = "Ban reason";
$string["action"] = "Action";
$string["value"] = "1st value";
$string["value2"] = "2nd value";
$string["value3"] = "3rd value";
$string["modAction1"] = "Rated a level";
$string["modAction2"] = "Un/featured a level";
$string["modAction3"] = "Un/verified coins";
$string["modAction4"] = "Un/epiced a level";
$string["modAction5"] = "Set as daily feature";
$string["modAction6"] = "Deleted a level";
$string["modAction7"] = "Creator change";
$string["modAction8"] = "Renamed a level";
$string["modAction9"] = "Changed level password";
$string["modAction10"] = "Changed demon difficulty";
$string["modAction11"] = "Shared CP";
$string["modAction12"] = "Un/published level";
$string["modAction13"] = "Changed level description";
$string["modAction14"] = "Enabled/disabled LDM";
$string["modAction15"] = "Leaderboard un/banned";
$string["modAction16"] = "Song ID change";
$string["modAction17"] = "Created a Map Pack";
$string["modAction18"] = "Created a Gauntlet";
$string["modAction19"] = "Changed song";
$string["modAction20"] = "Granted a moderator to player";
$string["modAction21"] = "Changed Map Pack";
$string["modAction22"] = "Changed Gauntlet";
$string["modAction23"] = "Changed quest";
$string["modAction24"] = "Reassigned a player";
$string["modAction25"] = "Created a quest";
$string["modAction26"] = "Changed player's username/password";
$string["modAction30"] = "Rated list";
$string["modAction31"] = "Sent list";
$string["modAction32"] = "Un/featured list";
$string["modAction33"] = "Un/published list";
$string["modAction34"] = "Deleted list";
$string["modAction35"] = "Changed list's creator";
$string["modAction36"] = "Changed list's name";
$string["modAction37"] = "Changed list's description";
$string["everyActions"] = "Any actions";
$string["everyMod"] = "All moderators";
$string["Kish!"] = "Go away!";
$string["noPermission"] = "You don't have permission!";
$string["noLogin?"] = "You are not logged into your account!";
$string["LoginBtn"] = "Login into account";
$string["dashboard"] = "Dashboard";
$string["userID"] = 'User ID';
//errors
$string["errorNoAccWithPerm"] = "Error: No accounts with the '%s' permission have been found";