<div id =newuser>
<br>
<br>
<h1><?php p($l->t('Welcome to VoNZ Project ' ));p($_['user'])?></h1>

<h2></h2>

	 <img src="<?php print_unescaped(OCP\Util::imagePath('newuser', 'hour.png')); ?>" style="height:180px"/>
		&emsp;&emsp;&emsp;
         <img src="<?php print_unescaped(OCP\Util::imagePath('newuser', 'Redicon.png')); ?>" style="height:180px"/>
        	 &emsp;&emsp;&emsp;
	 <img src="<?php print_unescaped(OCP\Util::imagePath('newuser', 'contact.png')); ?>" style="height:180px"/>


<h2><?php p($l->t('Sorry but you do not have complete access to the platform')); ?></h2>

<h2></h2>

<p><button id="commun">I am a common user</button> <button id="researcher">I am a researcher</button></p>

<h2></h2>

<label id="text" class="hidden"><h2><?php p($l->t('Please fulfill you personnal information in the background application. After that, an admin will check your profile and give you access to recording part of the platform. It could take 48h!*')); ?></h2><?php p($l->t('*If you have already waited 48h, please contact the admin'));?></label>

<label id="text2" class="hidden"><h2><a href="mailto:voiceofnewzealand@gmail.com?subject=New researcher account &body=Name:%0A%0AUniversity or Organisation:%0A%0APurpose of study:%0A%0AOthers  comments:%0A%0AIt could take 48h to give you the access. Please note that you will have 1GB of storage on your account, if you need more ask to the admin."><u><?php p($l->t('CLICK HERE ')); ?></u></a><?php p($l->t('to send a email to the administrator and have a special access to the platform. If you do not need it please register as a common user and you could change by sending an email later.')); ?></h2></label>
</div>
