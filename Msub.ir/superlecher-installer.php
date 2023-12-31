<html>
<head>
<title>Super Leecher Installer</title>
<style>
*{
	padding:0;
	margin:0;
	font-family: tahoma;
}
body{
	background-color:#eee;
}
#main{
	width:960px;
	height:600px;
	background-color:#fff;
	border:12px dashed #000;
	margin:20px auto;
}
#detials-leech{
	width:850px;
	-webkit-box-shadow: 1px 1px 8px 0px rgba(0, 0, 0, 1);
	-moz-box-shadow:    1px 1px 8px 0px rgba(0, 0, 0, 1);
	box-shadow:         1px 1px 8px 0px rgba(0, 0, 0, 1);
	margin:15px auto;
	padding:20px;
	background-color:#FFF;
}
#tit{
	margin:10% auto auto auto;
	font-weight: bold;
	font-family: tahoma;
	font-size: 50pt;
	width:480px;
}
#detials-leech .obj{
	margin:3px;
	height:25px;
}
#ver{
	font-size:8pt;
	font-weight:normal;
	float:right;
	margin: -72px 1px 0 0;
}
.mail-pass{
	width:200px;
}
.register-inp{
	width:250px;
	transition:400ms;
	-webkit-transition:400ms;
	-moz-transition:400ms;
	-o-transition:400ms;
}
.register-inp:focus{
	-webkit-box-shadow: 1px 1px 5px 0px red;
	-moz-box-shadow:    1px 1px 5px 0px red;
	box-shadow:         1px 1px 5px 0px red;
}
#tb-register{
	width: 410px;
	margin:10px auto;
	pading:10px;
}
#tb-register td{
	padding:10px;
}
</style>
</head>
<body>
<div id="main">

<div id="tit">Super Leecher<span id="ver">ver 2.0</span></div>

<?php
	if(($_POST['password'] != '') && ($_POST['email'] != ''))
	{
		installed();
	}
	else
	{
		if(isset($_GET['agree']))
			getdata();
		else
			gpl();
	}
		
	function gpl()
	{
	?>

<div id="detials-leech" style="font-size: 11pt;line-height: 25px;">
Hello and Welcome to installer Super Uploader Ver 2.0. This Script For Leech File Of Every Adress. The Super Uploader Have Been Suport <a href="http://mrprogrammer.net/" target="_blank">MrProgrammer.Net</a> and Public In GNU General Public 2014 , CopyLeft :
<br/><textarea style="width:100%;height:200px;font-size:10pt;padding:5px;margin:10px 0;">GNU General Public License
Version 2, June 1991
Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place - Suite 330, Boston, MA  02111-1307, USA
Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.
Preamble
The licenses for most software are designed to take away your freedom to share and change it. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change free software--to make sure the software is free for all its users. This General Public License applies to most of the Free Software Foundation's software and to any other program whose authors commit to using it. (Some other Free Software Foundation software is covered by the GNU Library General Public License instead.) You can apply it to your programs, too.
When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for this service if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs; and that you know you can do these things.
To protect your rights, we need to make restrictions that forbid anyone to deny you these rights or to ask you to surrender the rights. These restrictions translate to certain responsibilities for you if you distribute copies of the software, or if you modify it.
For example, if you distribute copies of such a program, whether gratis or for a fee, you must give the recipients all the rights that you have. You must make sure that they, too, receive or can get the source code. And you must show them these terms so they know their rights.
We protect your rights with two steps: (1) copyright the software, and (2) offer you this license which gives you legal permission to copy, distribute and/or modify the software.
Also, for each author's protection and ours, we want to make certain that everyone understands that there is no warranty for this free software. If the software is modified by someone else and passed on, we want its recipients to know that what they have is not the original, so that any problems introduced by others will not reflect on the original authors' reputations.
Finally, any free program is threatened constantly by software patents. We wish to avoid the danger that redistributors of a free program will individually obtain patent licenses, in effect making the program proprietary. To prevent this, we have made it clear that any patent must be licensed for everyone's free use or not licensed at all.
The precise terms and conditions for copying, distribution and modification follow.
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
0. This License applies to any program or other work which contains a notice placed by the copyright holder saying it may be distributed under the terms of this General Public License. The "Program", below, refers to any such program or work, and a "work based on the Program" means either the Program or any derivative work under copyright law: that is to say, a work containing the Program or a portion of it, either verbatim or with modifications and/or translated into another language. (Hereinafter, translation is included without limitation in the term "modification".) Each licensee is addressed as "you".
Activities other than copying, distribution and modification are not covered by this License; they are outside its scope. The act of running the Program is not restricted, and the output from the Program is covered only if its contents constitute a work based on the Program (independent of having been made by running the Program). Whether that is true depends on what the Program does.
1. You may copy and distribute verbatim copies of the Program's source code as you receive it, in any medium, provided that you conspicuously and appropriately publish on each copy an appropriate copyright notice and disclaimer of warranty; keep intact all the notices that refer to this License and to the absence of any warranty; and give any other recipients of the Program a copy of this License along with the Program.
You may charge a fee for the physical act of transferring a copy, and you may at your option offer warranty protection in exchange for a fee.
2. You may modify your copy or copies of the Program or any portion of it, thus forming a work based on the Program, and copy and distribute such modifications or work under the terms of Section 1 above, provided that you also meet all of these conditions:
a) You must cause the modified files to carry prominent notices stating that you changed the files and the date of any change.
b) You must cause any work that you distribute or publish, that in whole or in part contains or is derived from the Program or any part thereof, to be licensed as a whole at no charge to all third parties under the terms of this License.
c) If the modified program normally reads commands interactively when run, you must cause it, when started running for such interactive use in the most ordinary way, to print or display an announcement including an appropriate copyright notice and a notice that there is no warranty (or else, saying that you provide a warranty) and that users may redistribute the program under these conditions, and telling the user how to view a copy of this License. (Exception: if the Program itself is interactive but does not normally print such an announcement, your work based on the Program is not required to print an announcement.)
These requirements apply to the modified work as a whole. If identifiable sections of that work are not derived from the Program, and can be reasonably considered independent and separate works in themselves, then this License, and its terms, do not apply to those sections when you distribute them as separate works. But when you distribute the same sections as part of a whole which is a work based on the Program, the distribution of the whole must be on the terms of this License, whose permissions for other licensees extend to the entire whole, and thus to each and every part regardless of who wrote it.
Thus, it is not the intent of this section to claim rights or contest your rights to work written entirely by you; rather, the intent is to exercise the right to control the distribution of derivative or collective works based on the Program.
In addition, mere aggregation of another work not based on the Program with the Program (or with a work based on the Program) on a volume of a storage or distribution medium does not bring the other work under the scope of this License.
3. You may copy and distribute the Program (or a work based on it, under Section 2) in object code or executable form under the terms of Sections 1 and 2 above provided that you also do one of the following: 
a) Accompany it with the complete corresponding machine-readable source code, which must be distributed under the terms of Sections 1 and 2 above on a medium customarily used for software interchange; or,
b) Accompany it with a written offer, valid for at least three years, to give any third party, for a charge no more than your cost of physically performing source distribution, a complete machine-readable copy of the corresponding source code, to be distributed under the terms of Sections 1 and 2 above on a medium customarily used for software interchange; or,
c) Accompany it with the information you received as to the offer to distribute corresponding source code. (This alternative is allowed only for noncommercial distribution and only if you received the program in object code or executable form with such an offer, in accord with Subsection b above.)
The source code for a work means the preferred form of the work for making modifications to it. For an executable work, complete source code means all the source code for all modules it contains, plus any associated interface definition files, plus the scripts used to control compilation and installation of the executable. However, as a special exception, the source code distributed need not include anything that is normally distributed (in either source or binary form) with the major components (compiler, kernel, and so on) of the operating system on which the executable runs, unless that component itself accompanies the executable.
If distribution of executable or object code is made by offering access to copy from a designated place, then offering equivalent access to copy the source code from the same place counts as distribution of the source code, even though third parties are not compelled to copy the source along with the object code.
4. You may not copy, modify, sublicense, or distribute the Program except as expressly provided under this License. Any attempt otherwise to copy, modify, sublicense or distribute the Program is void, and will automatically terminate your rights under this License. However, parties who have received copies, or rights, from you under this License will not have their licenses terminated so long as such parties remain in full compliance.
5. You are not required to accept this License, since you have not signed it. However, nothing else grants you permission to modify or distribute the Program or its derivative works. These actions are prohibited by law if you do not accept this License. Therefore, by modifying or distributing the Program (or any work based on the Program), you indicate your acceptance of this License to do so, and all its terms and conditions for copying, distributing or modifying the Program or works based on it.
6. Each time you redistribute the Program (or any work based on the Program), the recipient automatically receives a license from the original licensor to copy, distribute or modify the Program subject to these terms and conditions. You may not impose any further restrictions on the recipients' exercise of the rights granted herein. You are not responsible for enforcing compliance by third parties to this License.
7. If, as a consequence of a court judgment or allegation of patent infringement or for any other reason (not limited to patent issues), conditions are imposed on you (whether by court order, agreement or otherwise) that contradict the conditions of this License, they do not excuse you from the conditions of this License. If you cannot distribute so as to satisfy simultaneously your obligations under this License and any other pertinent obligations, then as a consequence you may not distribute the Program at all. For example, if a patent license would not permit royalty-free redistribution of the Program by all those who receive copies directly or indirectly through you, then the only way you could satisfy both it and this License would be to refrain entirely from distribution of the Program.
If any portion of this section is held invalid or unenforceable under any particular circumstance, the balance of the section is intended to apply and the section as a whole is intended to apply in other circumstances.
It is not the purpose of this section to induce you to infringe any patents or other property right claims or to contest validity of any such claims; this section has the sole purpose of protecting the integrity of the free software distribution system, which is implemented by public license practices. Many people have made generous contributions to the wide range of software distributed through that system in reliance on consistent application of that system; it is up to the author/donor to decide if he or she is willing to distribute software through any other system and a licensee cannot impose that choice.
This section is intended to make thoroughly clear what is believed to be a consequence of the rest of this License.
8. If the distribution and/or use of the Program is restricted in certain countries either by patents or by copyrighted interfaces, the original copyright holder who places the Program under this License may add an explicit geographical distribution limitation excluding those countries, so that distribution is permitted only in or among countries not thus excluded. In such case, this License incorporates the limitation as if written in the body of this License.
9. The Free Software Foundation may publish revised and/or new versions of the General Public License from time to time. Such new versions will be similar in spirit to the present version, but may differ in detail to address new problems or concerns.
Each version is given a distinguishing version number. If the Program specifies a version number of this License which applies to it and "any later version", you have the option of following the terms and conditions either of that version or of any later version published by the Free Software Foundation. If the Program does not specify a version number of this License, you may choose any version ever published by the Free Software Foundation.
10. If you wish to incorporate parts of the Program into other free programs whose distribution conditions are different, write to the author to ask for permission. For software which is copyrighted by the Free Software Foundation, write to the Free Software Foundation; we sometimes make exceptions for this. Our decision will be guided by the two goals of preserving the free status of all derivatives of our free software and of promoting the sharing and reuse of software generally.
NO WARRANTY
11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW. EXCEPT WHEN OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.
12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
END OF TERMS AND CONDITIONS
How to Apply These Terms to Your New Programs
If you develop a new program, and you want it to be of the greatest possible use to the public, the best way to achieve this is to make it free software which everyone can redistribute and change under these terms.
To do so, attach the following notices to the program. It is safest to attach them to the start of each source file to most effectively convey the exclusion of warranty; and each file should have at least the "copyright" line and a pointer to where the full notice is found.
one line to give the program's name and an idea of what it does.
Copyright (C) yyyy  name of author
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
Also add information on how to contact you by electronic and paper mail.
If the program is interactive, make it output a short notice like this when it starts in an interactive mode:
Gnomovision version 69, Copyright (C) year name of author
Gnomovision comes with ABSOLUTELY NO WARRANTY; for details
type `show w'.  This is free software, and you are welcome
to redistribute it under certain conditions; type `show c'
for details.
The hypothetical commands `show w' and `show c' should show the appropriate parts of the General Public License. Of course, the commands you use may be called something other than `show w' and `show c'; they could even be mouse-clicks or menu items--whatever suits your program.
You should also get your employer (if you work as a programmer) or your school, if any, to sign a "copyright disclaimer" for the program, if necessary. Here is a sample; alter the names:
Yoyodyne, Inc., hereby disclaims all copyright
interest in the program `Gnomovision'
(which makes passes at compilers) written
by James Hacker.
signature of Ty Coon, 1 April 1989
Ty Coon, President of Vice
This General Public License does not permit incorporating your program into proprietary programs. If your program is a subroutine library, you may consider it more useful to permit linking proprietary applications with the library. If this is what you want to do, use the GNU Library General Public License instead of this License.
PYTHON SOFTWARE FOUNDATION LICENSE VERSION 2
--------------------------------------------
1. This LICENSE AGREEMENT is between the Python Software Foundation
("PSF"), and the Individual or Organization ("Licensee") accessing and
otherwise using this software ("Python") in source or binary form and
its associated documentation.
2. Subject to the terms and conditions of this License Agreement, PSF
hereby grants Licensee a nonexclusive, royalty-free, world-wide
license to reproduce, analyze, test, perform and/or display publicly,
prepare derivative works, distribute, and otherwise use Python
alone or in any derivative version, provided, however, that PSF's
License Agreement and PSF's notice of copyright, i.e., "Copyright (c)
2001, 2002, 2003, 2004, 2005, 2006 Python Software Foundation; All Rights
Reserved" are retained in Python alone or in any derivative version 
prepared by Licensee.
3. In the event Licensee prepares a derivative work that is based on
or incorporates Python or any part thereof, and wants to make
the derivative work available to others as provided herein, then
Licensee hereby agrees to include in any such work a brief summary of
the changes made to Python.
4. PSF is making Python available to Licensee on an "AS IS"
basis.  PSF MAKES NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR
IMPLIED.  BY WAY OF EXAMPLE, BUT NOT LIMITATION, PSF MAKES NO AND
DISCLAIMS ANY REPRESENTATION OR WARRANTY OF MERCHANTABILITY OR FITNESS
FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF PYTHON WILL NOT
INFRINGE ANY THIRD PARTY RIGHTS.
5. PSF SHALL NOT BE LIABLE TO LICENSEE OR ANY OTHER USERS OF PYTHON
FOR ANY INCIDENTAL, SPECIAL, OR CONSEQUENTIAL DAMAGES OR LOSS AS
A RESULT OF MODIFYING, DISTRIBUTING, OR OTHERWISE USING PYTHON,
OR ANY DERIVATIVE THEREOF, EVEN IF ADVISED OF THE POSSIBILITY THEREOF.
6. This License Agreement will automatically terminate upon a material
breach of its terms and conditions.
7. Nothing in this License Agreement shall be deemed to create any
relationship of agency, partnership, or joint venture between PSF and
Licensee.  This License Agreement does not grant permission to use PSF
trademarks or trade name in a trademark sense to endorse or promote
products or services of Licensee, or any third party.
8. By copying, installing or otherwise using Python, Licensee
agrees to be bound by the terms and conditions of this License
Agreement.</textarea>
<div style="width:246px;margin:10px auto;">
<a href="http://mrprogrammer.net/pay" target="_blank"><button>Pay For Suport</button></a>
<a href="?agree"><button>I Agree And Install</button>
</div>
</div>
<?php
	}
	function getdata()
	{
?>
<div id="detials-leech" style="width:400px;">
<form method="POST">
<table border="0" id="tb-register">
<tr>
<td>Your Email : </td>
<td><input type="text" name="email" value="<?php echo $_POST['email']; ?>" class="register-inp" /></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="text" name="password" value="<?php echo $_POST['password']; ?>" class="register-inp" /></td>
</tr>
<tr>
<td></td>
<td><div style="width:100px;margin:auto;"><input type="submit" value="Send" style="width:100px;" /></div></td>
</tr>
</table>
</form>
</div>
<?php
	}
	function installed()
	{
?>

<div id="detials-leech" style="color:green;font-size:13pt;text-align:center;">
Super Leecher Installed With Sucsfully , The Information Send For Your Email. You Move To Script wait...
</div>

<?php
	flush();
	
	$all_word = explode(" ", 
             "a b c d e f g h i j k l m n o p q r s t u v w x y z " 
            ."A B C D E F G H I J K L M N O P Q R S T U V W X Y Z " 
            ."0 1 2 3 4 5 6 7 8 9");
	
	$count_ring = rand(7,13);
	for($i=0;$i<$count_ring;$i++)
	{
		$select_rand = rand(0,count($all_word)-1);
		$rand = $rand.$all_word[$select_rand];
	}
	
	$superlecher ='<?php

	/********************************************
		Source Name: SuperLeecher
		Source URI: http://mrprogrammer.net/
		Description: this script for leech file
		Author: mrprogrammer
		Author URI: http://mrprogrammer.net/
		Version: 2.0.0
	********************************************/
	
	
	$email="'.$_POST['email'].'";
	$password="'.$_POST['password'].'";
	$key="'.$rand.'";
	$type_file_true="zip-mp4-jpg-avi-png-rar-7z-psd";
	
	
	if(file_exists("superlecher-installer.php"))
	{
		unlink("superlecher-installer.php");
	}
	
	$type_file_true = explode(\'-\',$type_file_true);
	
	if(@$_COOKIE[\'pass_cookie\'] == $key)
		$pass_true=1;
	else
		$pass_true=0;
		
	if((@$_POST[\'password\'] == $password)&&(@$_POST[\'email\'] == $email))
	{
		setcookie(\'pass_cookie\',$key,time()+600);
		$pass_true=1;
	}
	


?>
<html>
<head>
<title>Super Leecher</title>
<style>
*{
	padding:0;
	margin:0;
	font-family: tahoma;
}
body{
	background-color:#eee;
}
#main{
	width:960px;
	height:600px;
	background-color:#fff;
	border:12px dashed #000;
	margin:20px auto;
}
#detials-leech{
	width:850px;
	-webkit-box-shadow: 1px 1px 8px 0px rgba(0, 0, 0, 1);
	-moz-box-shadow:    1px 1px 8px 0px rgba(0, 0, 0, 1);
	box-shadow:         1px 1px 8px 0px rgba(0, 0, 0, 1);
	margin:15px auto;
	padding:20px;
	background-color:#FFF;
}
#tit{
	margin:10% auto auto auto;
	font-weight: bold;
	font-family: tahoma;
	font-size: 50pt;
	width:480px;
}
#detials-leech .obj{
	margin:3px;
	height:25px;
}
#ver{
	font-size:8pt;
	font-weight:normal;
	float:right;
	margin: -72px 1px 0 0;
}
.mail-pass{
	width:200px;
}
.register-inp{
	width:250px;
	transition:400ms;
	-webkit-transition:400ms;
	-moz-transition:400ms;
	-o-transition:400ms;
}
.register-inp:focus{
	-webkit-box-shadow: 1px 1px 5px 0px green;
	-moz-box-shadow:    1px 1px 5px 0px green;
	box-shadow:         1px 1px 5px 0px green;
}
#tb-register{
	width: 385px;
	margin:10px auto;
	pading:10px;
}
#tb-register td{
	padding:10px;
}
</style>
</head>
<body>
<div id="main">

<div id="tit">Super Leecher<span id="ver">ver 2.0</span></div>

<?php
	if($pass_true == 1)
	{
		if((isset($_POST[\'addres\']))&&(trim($_POST[\'addres\']) != \'\'))
		{
			$exp_find_filename=explode("/", $_POST[\'addres\']);
			foreach($exp_find_filename as $every_exp)
			{
				$name_file=$every_exp;
				$name_file_org=$every_exp;
			}
			
			$exp_find_filename=explode(".", $name_file_org);
			foreach($exp_find_filename as $every_exp)
			{
				$type_file=$every_exp;
			}
			
			if(trim($_POST[\'rename\']) != \'\')
				$name_file = trim($_POST[\'rename\']).\'.\'.$type_file;
			
			
			$type_run_true = false;
			foreach($type_file_true as $key)
			{
				if($type_file == $key)
				{
					$type_run_true = true;
					break;
				}
			}
			
			if($type_run_true)
			{
				$f = @file_get_contents ($_POST[\'addres\'] , "r");
				if($f != \'\')
				{
					$file=@fopen($name_file,\'w\');
					@fwrite($file,$f);
					@fclose($file);
				}
				
				
				$exp_find_filename=explode("/", $_SERVER[REQUEST_URI]);
				foreach($exp_find_filename as $every_exp)
				{
					$end_addres=$every_exp;
				}
				$end_addres = str_replace($end_addres,\'\',$_SERVER[REQUEST_URI]);
				$end_addres = "http://$_SERVER[HTTP_HOST]$end_addres".$name_file;
				
				if(file_exists($name_file))
				{
					?>
					<div style="color:green;font-weight:bold;font-size:15pt;text-align:center;" id="detials-leech">
					The Flie "<?php echo $name_file_org; ?>" Copy Is Complate
					</div>
					<div id="detials-leech">
					File Link : <input type="text" style="width:100%;" value="<?php echo $end_addres; ?>" />
					</div>
					<?php
				}
				else
				{
					?>
					<div style="color:red;font-weight:bold;font-size:15pt;text-align:center;" id="detials-leech">
					The File Not Exist
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div style="color:red;font-weight:bold;font-size:15pt;text-align:center;" id="detials-leech">
				The Type File Not Suport
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div id="detials-leech">
			<form method="POST">
			<div class="obj" style="float:left;">Adress : </div>
			<input type="text" name="addres" class="obj" style="width:80%" value="http://" />
			<input type="submit" class="obj" value="Send Copy" id="load" />

			</div>
			<div id="detials-leech">
			Rename To : <input type="text" name="rename" style="width:250px;" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			
			<?php 
			echo "Alow Type : ".implode(",",$type_file_true);
			
			?>
			</form>
			</div>
			<?php
		}
	}
	else
	{
		?>
		<div id="detials-leech" style="width: 626px;">
		<form method="POST">
		Mail : <input type="text" name="email" class="mail-pass" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password : <input type="text" name="password" class="mail-pass" />
		<br/><br/><div style="width:150px;margin:auto;"><input type="submit" value="send" style="width:150px" /></div>
		</form>
		</div>
		<?php
		if(isset($_POST[\'password\']))
		{
			mail($email,"loging flase super leecher","the ip : ".$_SERVER[\'REMOTE_ADDR\']." login false in domain : ".$_SERVER[HTTP_HOST]." <br/>this user login false with password : ".$_POST[\'password\']." and email : ".$_POST[\'email\']." <br/> and this other information : ".$_SERVER [\'HTTP_USER_AGENT\']);
			?>
			<div id="detials-leech" style="width: 626px;color:red;font-size:15pt;font-weight:bold;text-align:center;">
			The Information Is False And your IP Send for Administrator
			</div>
			<?php
		}
	}
?>

</div>
</body>
</html>';
	
	$file=@fopen("superlecher.php",'w');
	@fwrite($file,$superlecher);
	@fclose($file);
	
	mail($_POST['email'],"welcome to super leecher","hello , the superleecher install with sucsfully in domain ".$_SERVER[HTTP_HOST]);
	
	sleep(4);
	?>
	<script>
	window.location = "superlecher.php";
	</script>
	<?php
	}
?>

</div>
</body>
</html>