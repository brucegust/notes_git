<!DOCTYPE html>
<html lang="en">
<head>
<title>GIT</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<!-- these are files that allow for the tooltip functionality -->
<link rel="stylesheet" type="text/css" href="tooltipster/dist/css/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="tooltipster/dist/js/tooltipster.bundle.min.js"></script>
<!-- this activates the tooltip functionality -->
<script>
	$(document).ready(function() {
		$('.tooltip').tooltipster({
		//theme: 'tooltipster-light',
		interactive: true
		});
	});
</script>
<style>

table.basics, th, tr, td {
	padding:5px;
	border-collapse:collapsed;
	border:none;
}

.table {
	width:90%; 
	border-collapse:separate; 
	margin:auto;
	border:1px solid #ccc;
	padding:5px;
}

.table_title {
	background-color:#cccccc;
	text-align:center;
	font-weight:bold;
	border:1px solid #ccc;
}

.table td {
	border:1px solid #ccc;
}

.command {
	font-weight:bold;
}

.yellow {
	color:#e9e105;
}

</style>

<?php
	$top="&lt;a href=\"#top\" style=\"font-weight:normal; text-decoration:none; color:#808080;\">(back to top...)&lt;/a&gt;&lt;/span&gt;";
	
	//black numbers
	$one = "<span style=\"font-size:16pt;\">&#10102; </span>";
	$two = "<span style=\"font-size:16pt;\">&#10103; </span>";
	$three = "<span style=\"font-size:16pt;\">&#10104; </span>";
	$four = "<span style=\"font-size:16pt;\">&#10105; </span>";
	$five = "<span style=\"font-size:16pt;\">&#10106; </span>";
	$six = "<span style=\"font-size:16pt;\">&#10107; </span>";
	$seven = "<span style=\"font-size:16pt;\">&#10108; </span>";
	$eight = "<span style=\"font-size:16pt;\">&#10109; </span>";
	$nine = "<span style=\"font-size:16pt;\">&#10110; </span>";
	$ten = "<span style=\"font-size:16pt;\">&#10111; </span>";
	
	//white numbers
	/*
	$white_one = "<span style=\"font-size:16pt;\">&#10112; </span>";
	$white_two = "<span style=\"font-size:16pt;\">&#10113; </span>";
	$white_three = "<span style=\"font-size:16pt;\">&#10114; </span>";
	$white_four = "<span style=\"font-size:16pt;\">&#10115; </span>";
	$white_five = "<span style=\"font-size:16pt;\">&#10116; </span>";
	$white_six = "<span style=\"font-size:16pt;\">&#10117; </span>";
	$white_seven = "<span style=\"font-size:16pt;\">&#1018; </span>";
	$white_eight = "<span style=\"font-size:16pt;\">&#1019; </span>";
	$white_nine = "<span style=\"font-size:16pt;\">&#1020; </span>";
	$white_ten = "<span style=\"font-size:16pt;\">&#1021; </span>";
	*/
	
	$white_one = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">1</div></div>";
	$white_two = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">2</div></div>";
	$white_three = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">3</div></div>";
	$white_four = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">4</div></div>";
	$white_five = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">5</div></div>";
	$white_six = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">6</div></div>";
	$white_seven = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">7</div></div>";
	$white_eight = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">8</div></div>";
	$white_nine = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">9</div></div>";
	$white_ten = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">10</div></div>";
	
	//white_letters 
	
	$a = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">a</div></div>";
	$b = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">b</div></div>";
	$c = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">c</div></div>";
	$d = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">d</div></div>";
	$e = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">e</div></div>";
	$f = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">f</div></div>";
	$g = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">g</div></div>";
	$h = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">h</div></div>";
	$i = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">i</div></div>";
	$j = "<div class=\"smallNumberCircle\"><div class=\"smallNumberInside\">j</div></div>";
	
	//black letters
	
	$black_a = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">a</div></div>";
	$black_b = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000; padding-top:2px;\"><div class=\"smallNumberInside\">b</div></div>";
	$black_c = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">c</div></div>";
	$black_d = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">d</div></div>";
	$black_e = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">e</div></div>";
	$black_f = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\" style=\"margin-top:-4px;\">f</div></div>";
	$black_g = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">g</div></div>";
	$black_h = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">h</div></div>";
	$black_i = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">i</div></div>";
	$black_j = "<div class=\"smallNumberCircle\" style=\"background-color:#fff; color:#000;\"><div class=\"smallNumberInside\">j</div></div>";

	$code_frame="<div class=\"code_frame\"><div class=\"inner_code_frame\">";
	
?>
</head>

<body>

<div class="content">
	<div class="wysiwyg">
	<!-- table of contents-->
		<div style="padding:10px; border:1px solid #cccccc; border-radius:10px; width: 800px; height:auto; margin:auto;">
<img src="images/admin_header.jpg" style="width:795px;">
  <a name="top"><b>GIT -> Table of Contents:</b></a>

<div style="display:inline-block; border:1px solid #cccccc; border-radius:10pt; padding:10px; margin:auto; box-shadow:5px 5px 5px #cccccc; font-size:10pt;">Any word that is highlighted in yellow represents a "tooltip." You can hover over it and see some additional information about that particular term. Any edits to that functionality can be investigagted by heading out to <a href="http://iamceege.github.io/tooltipster/#htmlcontentalt" target="_blank">tooltipster.com</a>. Some good online resources include<ul><li><a href="http://marklodato.github.io/visual-git-guide/index-en.html" target="_blank">A Visual GIT Resource</a></li></ul></div>

<div style="margin:auto; width:750px; height:auto; padding:10px; text-align:center; color:#fff; background-color:#000000; border-radius:10pt;"> <a href="https://www.udemy.com/git-complete/learn/v4/t/lecture/1438990?start=0" target="_blank" style="color:#ffffff; ">GIT Course by Jason Taylor</a> - for more educational content, click <a href="http://brucegust.com/adm/git_tutorial/git.php" style="color:#ffffff;" target="_blank">here</a></div>
<div class="toc_title"><a href="#terminal" class="contents">&nbsp;I) Terminal, Command Line, Bash...?</a></div>

<span class="tab_once"><a href="#linux_terminal" class="contents">A) Terminal</a></span>
<span class="tab_once"><a href="#shell" class="contents">B) Shell</a></span>
<span class="tab_twice"><a href="#line_shell" class="contents">1) Command Line / BASH</a></span>
<span class="tab_once"><a href="#powershell" class="contents">C) Powershell</a></span>

<div class="toc_title"><a href="#intro_oop" class="contents">&nbsp;II) GIT Terminology</a></div>

Repository, Staging Area, Commit, etc...

<div class="toc_title"><a href="#basics" class="contents">&nbsp;III) Getting Started</a></div>

<span class="tab_once"><a href="#navigating" class="contents">A) Navigating to Your Projects Folder</a></span>
<span class="tab_once"><a href="#configuration" class="contents">B) Configuration</a></span>
<span class="tab_once"><a href="#clone" class="contents">C) Clone Your Repository</a></span>
<span class="tab_once"><a href="#status" class="contents">D) Check Status</a></span>

<div class="toc_title">&nbsp;<a name="basic_sequence" class="contents">IV) Basic Sequence</a></div> 

Here's the "meat and potatoes" of a basic GIT command sequence...

<span class="tab_once"><a href="#create_file" class="contents">A) Create File</a></span>
<span class="tab_twice"><a href="#untracked_file" class="contents">1) Untracked File</a></span>
<span class="tab_once"><a href="#add_file" class="contents">B) Add File</a></span>
<span class="tab_once"><a href="#commit" class="contents">C) Commit File</a></span>
<span class="tab_once"><a href="#push" class="contents">D) Push File</a></span>

<div class="toc_title">&nbsp;<a name="notepad++" class="contents">V) GIT / Notepad++ Configuration</a></div>

<span class="tab_once"><a href="#path" class="contents">A) Path</a></span>
<span class="tab_once"><a href="#.bash_profile" class="contents">B) .bash_profile</a></span>
<span class="tab_once"><a href="#editor" class="contents">C) Default Editor</a></span>

<div class="toc_title">&nbsp;<a name="basic_git" class="contents">VI) Basic GIT Commands</a></div>

Some of this is a repeat of what's already been discussed, but that's OK...!

<span class="tab_once"><a href="#init" class="contents">A) git init</a></span>
<span class="tab_once"><a href="#init" class="contents">B) ls -a</a></span>
<span class="tab_once"><a href="#status" class="contents">C) git status</a></span>
<span class="tab_once"><a href="#hipster" class="contents">D) notepad++ hipster</a></span>
<span class="tab_once"><a href="#add" class="contents">E) git add</a></span>
<span class="tab_once"><a href="#commit" class="contents">F) git commit</a></span>
<span class="tab_once"><a href="#remove" class="contents">G) git rm -rf</a></span>

<div class="toc_title">&nbsp;<a href="#existing" class="contents">VII) Adding GIT to an Existing Project</a></div>

<span class="tab_once"><a href="#initializr" class="contents">A) Initializr - Sample Project</a></span>
<span class="tab_twice"><a href="#unzip" class="contents">1) unzip</a></span>
<span class="tab_twice"><a href="#rename" class="contents">2) Rename</a></span>
<span class="tab_once"><a href="#init_install" class="contents">B) git init</a></span>
<span class="tab_once"><a href="#git_remove" class="contents">C) Remove git</a></span>
<span class="tab_once"><a href="#kill_site" class="contents">C) Kill Site</a></span>

<div class="toc_title">&nbsp;<a href="#joining" class="contents">VIII) Starting on GitHub by Joining an Already Existing Project</a></div>

<span class="tab_once"><a href="#fork" class="contents">A) Fork</a></span>
<span class="tab_once"><a href="#clone" class="contents">B) Clone</a></span>
 
<div class="toc_title">&nbsp;<a href="#workflow" class="contents">IX) Basic GIT Workflow</a></div>

<span class="tab_once"><a href="#add_files" class="contents">A) Add File</a></span>
<span class="tab_once"><a href="#commit_files" class="contents">B) Commit File</a></span>
<span class="tab_once"><a href="#pull_files" class="contents">C) Pull Files</a></span>
<span class="tab_once"><a href="#push_files" class="contents">D) Push Files</a></span>

<div class="toc_title">&nbsp;<a href="#tracked" class="contents">X) Tracked Files</a></div>

<span class="tab_once"><a href="#config" class="contents">A) Configuration</a></span>
<span class="tab_once"><a href="#tracking_files" class="contents">B) Keeping Track of your Files | ls files</a></span>
<span class="tab_once"><a href="#commit_am" class="contents">C) Add / Commit Shortcut | commit -am</a></span>

<div class="toc_title">&nbsp;<a href="#edit" class="contents">XI) Edit Files</a></div>

Be careful of the aforementioned shortcut in that you don't want to contend with multiple files, some of which need to be added and others need to be committed...

<div class="toc_title">&nbsp;<a href="#recursive" class="contents">XII) Add Files Recursively</a></div>

<span class="tab_once"><a href="#mkdir" class="contents">A) Make Directory | mkdir</a> </span>
<span class="tab_once"><a href="#recursive_add" class="contents">B) Add Files Recursively | add .</a></span>

<div class="toc_title">&nbsp;<a href="#backing_out" class="contents">XIII) Backing Out Changes</a></div>

<span class="tab_once"><a href="#reset" class="contents">A) Reset</a> </span>
<span class="tab_once"><a href="#checkout" class="contents">B) Checkout</a> </span> 

<div class="toc_title">&nbsp;<a href="#moving" class="contents">XIV) Moving and Renaming Files</a></div>

<span class="tab_once"><a href="#rename" class="contents">A) Rename Files </a></span>
<span class="tab_twice"><a name="mv" class="contents">1) mv<a></span>
<span class="tab_twice"><a name="git_mv" class="contents">2) git mv<a></span>
<span class="tab_once"><a href="#rename" class="contents">A) Rename Files </a></span>
<span class="tab_once"><a href="#move_files" class="contents">B) Move Files</a></span>

<div class="toc_title">&nbsp;<a href="#deleting" class="contents">XV) Deleting Files</a></div>

<span class="tab_once"><a href="#delete_untracked" class="contents">A) Deleting an Untracked File</a></span>
<span class="tab_once"><a href="#delete_tracked" class="contents">B) Deleting a Tracked File</a></span>
<span class="tab_twice"><a href="#list_all_files" class="contents">1) List All Files | ls-files &amp; ls</a></span>
<span class="tab_twice"><a href="#git_rm" class="contents">2) git rm</a></span>
<span class="tab_twice"><a href="#confirm_delete" class="contents">3) Confirm Delete</a></span>
<span class="tab_once"><a href="#undoing_delete" class="contents">C) Undoing a Delete | reset, checkout</a></span>
<span class="tab_once"><a href="#without_git" class="contents">D) Deleting a File Without GIT</a></span>
<span class="tab_once"><a href="#directory_git" class="contents">E) Deleting an Entire Directory</a></span>

<div class="toc_title">&nbsp;<a href="#history" class="contents">XVI) History</a></div>

<span class="tab_once"><a href="#help" class="contents">A) Help File</a></span>
<span class="tab_once"><a href="#log" class="contents">B) Log</a></span>
<span class="tab_twice"><a name="everything" class="contents">1) List Everything | git log</a></span>
<span class="tab_twice"><a name="everything" class="contents">2) Abbreviated SHA Value | git log --abbrev-commit</a></span>

<div class="toc_title">&nbsp;<a href="#alias" class="contents">XVII) Alias</a></div>

<span class="tab_once"><a href="#oneline" class="contents">A) git log -all --graphi --decorate --oneline</a></span> 
<span class="tab_twice"><a href="#hist" class="contents">1) hist</a></span>
<span class="tab_twice"><a href="#hist" class="contents">2) git config --global alias.hist</a></span>
<span class="tab_twice"><a href="#edit_hist" class="contents">3) Edit Alias's</a></span> 

<div class="toc_title">&nbsp;<a href="#ignore" class="contents">XVIII) Ignoring Unwanted Files</a></div>

<span class="tab_once"><a href="#gitignore" class="contents">A) .gitignore</a></span>
<span class="tab_twice"><a href="#al" class="contents">1) ls -al</a></span>
<span class="tab_twice"><a href="#create_gitignore" class="contents">2) Create gitignore File</a></span>
<span class="tab_once"><a href="#overlook" class="contents">B) Documenting What You Want to Ignore</a></span>
<span class="tab_once"><a href="#ignore_directory" class="contents">C) Ignoring an Entire Directory</a> </span>
<span class="tab_twice"><a href="#roger_that" class="contents">1) mkdir, copy and move</a></span>
<span class="tab_twice"><a href="#kill_folder" class="contents">2) Ignore Directory</a></span>

<div class="toc_title">&nbsp;<a href="#push_origin" class="contents">XIX) Cleanup and Push Back to Origin</a></div>

Cleaning up your GIT Bash screen, pulling from your repository to ensure you're up to date with what's been done apart from your local box and pushing all of your changes up to your master fork / branch.

<div class="toc_title">&nbsp;<a href="#comparisons" class="contents">XX) Comparisons</a></div>

<span class="tab_once"><a href="#work_stage" class="contents">A) Working Directory and Staging Area</a>
<span class="tab_twice"><a href="#diff" class="contents">1) git diff</a></span>
<span class="tab_twice"><a href="#difftool" class="contents">2) difftool</a></span>
<span class="tab_twice"><a href="#p4merge" class="contents">3) p4Merge</span>
<span class="tab_once"><a href="#working_directory" class="contents">B) Working Directory and GIT Repository (last commit)</a></span>
<span class="tab_once"><a href="#specific_files" class="contents">C) Comparing Repository to Specific Files</a></span>
<span class="tab_once"><a href="#between_commits" class="contents">D) Comparing Between Commits</a></span>
<span class="tab_twice"><a href="#git_log" class="contents">1) GIT Log</a></span>
<span class="tab_twice"><a href="#between_recent" class="contents">2) One Commit w/ the Most Recent</a></span>
<span class="tab_once"><a href="#between_local_remote" class="contents">E) Comparing Between Local and Remote Master Branches</a></span>
<span class="tab_once"><a href="#between_cleanup" class="contents">F) Comparing Section Cleanup and Push Back to Github</a></span>

<div class="toc_title">&nbsp;<a href="#branching_merging" class="contents">XXI) Branching and Merging</a></div>

<span class="tab_once"><a href="#branching_basics" class="contents">A) Comparing Section Cleanup and Push Back to Github</a></span>
<span class="tab_twice"><a href="#branching_list" class="contents">1) List All Branches</a></span>
<span class="tab_twice"><a href="#branching_create" class="contents">2) Create a Branch</a></span>
<span class="tab_twice"><a href="#branching_rename" class="contents">3) Rename a Branch</a></span>
<span class="tab_twice"><a href="#branching_rename" class="contents">4) Delete a Branch</a></span>

<div class="toc_title">&nbsp;<a href="#reset" class="contents" style="color:red;">XXII) Bonus: Touch, Removing Files &amp; Hard Reset</a></div>

<span class="tab_once"><a href="#touch" class="contents">A) Touch</a></span>
<span class="tab_once"><a href="#just_one" class="contents">B) Physically Removing Just One File</a></span>
<span class="tab_once"><a href="#just_one_stage" class="contents">C) Removing a File From the Staging Area</a></span>
<span class="tab_once"><a href="#just_one_add" class="contents">D) Removing a File That's Been Added</a></span>
<span class="tab_once"><a href="#rid_commit" class="contents">D) Getting Rid of a File That's Been Committed</a></span>
<span class="tab_once"><a href="#hard_reset" class="contents">E) Hard Reset</a></span>


<div class="toc_title">&nbsp;<a href="#one_command" class="contents">XXIII) One Command -> Create and Checkout Branch | Fast Forward Merge</a></div>

<span class="tab_once"><a name="one_fell_swoop" class="contents">A) Create and Checkout a New Branch With One Command</a></span>
<span class="tab_once"><a href="#fast_merge" class="contents">B) Fast Forward Merge</a></span>
<span class="tab_once"><a href="#disable_fast_merge" class="contents">C) Fast Forward Merge</a></span>
<span class="tab_once"><a href="#auto_merge" class="contents">D) Automatic Merges</a></span>
<span class="tab_once"><a href="#conflicting_puppies" class="contents">E) Conflicting Merges and Resolution</a></span>
<span class="tab_twice"><a href="#conflicting_resolution" class="contents">1) Cleanup</a></span>

<div class="toc_title">&nbsp;<a href="#rebasing" class="contents">XXIV) Rebasing</a></div>

Bringing changes from your master branch to a recently changed branch and combining things so everybody's up to speed.

<span class="tab_once"><a href="#rebasing_example" class="contents">A) Simple Rebasing Example</a></span>
<span class="tab_once"><a href="#rebasing_conflict" class="contents">B) Setup for Rebasing Conflict</a></span>
<span class="tab_once"><a href="#rebasing_abort" class="contents">C) Abort Rebase</a></span>
<span class="tab_once"><a href="#rebasing_resolution" class="contents">D) Rebasing Conflict &amp; Resolution</a></span>
<span class="tab_once"><a href="#rebasing_pull" class="contents">E) Pull With Rebase</a></span>
<span class="tab_twice"><a href="#fecth_pull" class="contents">1) Fetch versus Pull</a></span>

<div class="toc_title">&nbsp;<a href="#stashing" class="contents">XXV) Stashing</a></div>

<span class="tab_once"><a href="#stash_example" class="contents">A) Simple Example</a></span>

<div class="toc_title">&nbsp;<a href="#practical" class="contents">Practical Application</a></div>

Quick rundown of some basic commands in the context of a real life scenario.

<span class="tab_once"><a href="#setup_repository" class="contents">A) Set Up Repository</a></span>
<span class="tab_once"><a href="#setup_add" class="contents">B) New Branch / Add All</a></span>
<span class="tab_once"><a href="#setup_commit" class="contents">C) Commit Changes and Merge Them Into "master"</a></span>
<span class="tab_once"><a href="#setup_push" class="contents">D) Push Them Into origin master</a></span>
<span class="tab_once"><a href="#prac_origin" class="contents">E) Push to Your Remote Repository</a></span>
<span class="tab_once"><a href="#prac_reset" class="contents">F) Reset Your Base Branch to What's on Your Remote Repository</a> </span>
<span class="tab_once"><a href="#prac_reset" class="contents">G) Unstage Unwanted Files</a></span>
<span class="tab_once"><a href="#prac_exit" class="contents">H) Exiting the Comment Section of the Command Line</a></span>
<span class="tab_once"><a href="#prac_force" class="contents">I) Force a Branch Checkout</a></span>
<span class="tab_once"><a href="#prac_tracked" class="contents">J) Prevent a File From Being Tracked</a></span>
<span class="tab_once"><a href="#prac_pull" class="contents">K) Pull From Remote Repository</a></span>
<span class="tab_twice"><a href="#prac_track" class="contents">1) Track a Remote Branch</a></span>
<span class="tab_once"><a href="#prac_reset" class="contents">L) Remove vs Reset</a></span>
<span class="tab_twice"><a href="#prac_rm" class="contents">1) Remove -> rm bin/start.sh (this is how you lose a file)</a></span>
<span class="tab_twice"><a href="#prac_running" class="contents">2) What Procecces are Running?</a></span>
<span class="tab_twice"><a href="#prac_retrieve" class="contents">3) Retrieve a File</a></span>
<span class="tab_twice"><a href="#prac_unstage" class="contents">2) Reset / Unstage</a></span>
<span class="tab_once"><a href="#prac_denied" class="contents">M) error: unable to create file bin/start.sh: Permission denied</a></span>
<span class="tab_once"><a href="#prac_conflicts" class="contents">N) Resolving Conflicts</a></span>

This piece is pretty substantial in that you're reviewing how to use the P4 Merge Tool. In addition, to get to that point, you're creating a new project on Github that already exists on your local box, intentionally creating conflicts and then using the Merge Tool to resolve those conflicts and merge them into your Master branch. 

Buckle up!

<span class="tab_twice"><a href="#prac_init" class="contents">1) git int</a></span>
<span class="tab_thrice"><a href="#prac_lf" class="contents">a) LF will be replaced by CRLF</a></span>
<span class="tab_twice"><a href="#prac_init" class="contents">2) git add origin</a></span>
<span class="tab_twice"><a href="#prac_push" class="contents">3) git push origin master</a></span>



		</div><!--end of table of contents-->
The one thing you're going to want access to when you finish this course is a quick and easy reference for GIT commands. Here's a list of some of those that resonated as highlights in this course:

<div style="width:95%; margin:auto; border:1px solid #ccc; box-shadow: 5px 5px 3px #ccc inset; padding:10px; border-radius:10pt;"><ul><li>git init -> set up your initial directory</li><li>git ls - a -> see all of the files in your directory including those that are hidden</li><li>git log --oneline --graph --decorate -> see a colorful record of all the changes you've made. TO GET OUT OF YOUR LOG, TYPE "q"</li><li>git difftool &lt;target branch&gt; &lt;current branch&gt; -> see a visual comparison of what you've changed and what's currently in place. TO QUIT VIMDIFF, TYPE ":qall"</li><li>git commit -am "commit message" -> quick and easy way to commit changes without having to open up a text editor to compose commit message</li><li>git branch -d &lt;branch to be deleted&gt;-> delete a branch</li></ul></div>
<div class="title">&nbsp;<a name="terminal">I) Terminal, Command Line, Bash...?</a></div> 
	
<span class="tab_once"><a name="linux_terminal" class="contents">A) Terminal</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Back in the day, you didn't have "Windows," you had a <a href="https://www.youtube.com/watch?v=Yt57-gg9jVg" target="_blank">terminal</a>. It's a basic interface that you use to input text that you're using to communicate with the computer. Here's the thing, though: It doesn't know what to do with that information - it's like a digital piece of paper. To actually get something done, the terminal sends the info you've typed into it to the next layer of functionality in the process which is called the "Shell."

<span class="tab_once"><a name="shell" class="contents">B) Shell</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

The Shell is what's actually getting something done. It's taking the content you're inputting and processing that in a way the computer / program can understand. 

<span class="tab_twice"><a name="line_shell" class="contents">1) Command Line / BASH</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Having defined, "Shell," know that a lot of these terms are used interchangably. Plus, a "Terminal," in the most orthodox sense doesn't really exist in the way that it used to. Rarely, if ever, are you going to use a program that is nothing more than a mere typewrite. Rather, you're going to use programs that constitute a combination of the "terminal" and the "shell" and you're going to hear folks referring to that as a, "Shell" when they're actually referring to two distinct entities. 

To make it even more convolluted, a "<a href="https://www.quora.com/What-is-the-difference-between-command-line-and-shell" target="_blankn">Command Line</a>," is considered to be a Shell in and of itself. You're going to hear and use that a lot in a Windows environment. "Terminal" is recognized as a Shell in the Mac world. 

"BASH" is an acrostic and it stands for "<a href="https://www.quora.com/What-is-the-difference-between-command-line-and-shell" target="_blank">Bourne Again Shell</a>," referring to Stephen Bash and his effors back in 1971. It's a "Shell," obviously. So, when you're talking about "GIT Bash," you're talking about a Shell specifically designed to interact with GIT.

<span class="tab_once"><a name="powershell" class="contents">C) Powershell</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<a href="https://www.digitalcitizen.life/simple-questions-what-powershell-what-can-you-do-it" target="_blank">Windows Powershell</a> was designed by Microsoft in 2006 to replace the conventional Command Line interface. You can do more with it and, depending on your preferences, the syntax is a little more approachable.
	
<div class="title">&nbsp;<a name="intro_op">II) GIT Terminology</a></div> 

<a href="images/remote.png" target="_blank"><img src="images/remote.png" style="width:250px; float:right; margin:10px;" border="0"></a><table class="basics"><tr><td colspan="2"><b>Repository</b> - contains files, history and config managed by GIT</td>
</tr><tr><td colspan="2"><b>3 Local States</b></td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>- Working Directory -> holds all app files, usually holds the ".git" folder that holds the actual repository and manages the history of all the commits</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>- Staging Area -> often referred to as the GIT index. These are the files that are poised to be committed and going live</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>- Commit - GIT Repository -> files that have been committed and are live</td></tr><tr><td colspan="2"><b>Remote Repository</b> -  see diagram to the right. Basically, it's where your code is <a href="https://help.github.com/articles/about-remote-repositories/" target="_blank">stored</a></td></tr><tr><td colspan="2"><b>Master Branch</b> - your starting point and where the history of your commits resides</td></tr></table>

<div class="title">&nbsp;<a name="basics">III) Getting Started</a></div> 

<span class="tab_once"><a name="navigating" class="contents">A) Navigating to Your Projects Folder</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You're going to be using Git Bash for the majority of your GIT commands. Although, Command Prompt and Powershell are not uncommon...

Start by creating a "projects" folder in your <span class="blue">users/brucegust</span> directory by typing "mkdir projects" once you've navigated to that directory. 

As an aside, getting to that directory (users/brucegust/projects) in GIT Bash is a little confusing at first until you realize that when you open up GIT Bash, you are are, by default, sitting in your "C" directory. 

...and you'll use lowercase "c" to get to your various directories when your "c" drive is included in the URL.

<span class="tab_once"><a name="configuration" class="contents">B) Configuration</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<a href="images/bash_config.png" target="_blank"><img src="images/bash_config.png" border=0" style="float:right; margin:10px; width:450px;"></a>You need to set up some GIT "globals," which will include your email address and your name. To do that, just go by the commands you see on the image to the right.

<span class="tab_once"><a name="clone" class="contents">C) Clone Your Repository</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Grab the URL that's provided when you click on the, "Clone or Download" button your GIT Repository page. Type "git clone..." and then paste the link and hit enter.

<span class="tab_once"><a name="status" class="contents">D) Check Status</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

At this point, you want to check the status of your branch as it relates to your master which is sitting in your repository. To do that, type:

<span class="blue">git status</span>

At that point, you'll get this:

<div class="git_box"><span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git status
On branch master
Your branch is up to date with 'origin/master'.

nothing to commit, working tree clean</div>

This is telling you that you're on the "master" branch, it's completely synced up with the "origin" and there are no changes in your staging area.

<div class="title">&nbsp;<a name="basic_sequence">IV) Basic Sequence</a></div> 

<span class="tab_once"><a name="create_file" class="contents">A) Create File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To add a file to your local directory, do this:

<div class="git_box"><span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git echo "Test GIT Quick Start Demo" >> start.txt

</div>

Now if we do an "ls" command (DIR if you're on the Command Line), you'll see the new file. 

<span class="tab_twice"><a name="untracked_file" class="contents">1) Untracked File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

At this point, you've got a change on your local directory that's not been registered yet in your repository. We need to move that file to the Staging Area and we do that like so...

First of all, hit "git status" and you'll see how our new file is recognized as an "untracked file..."

<div class="git_box"><span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span style="color:red;">start.txt</span>

nothing added to commit but untracked files present (use "git add" to track)</div>

What that means is that we've worked on something, but we've not added it to the staging area where you put all of the files that you're wanting to include in your app. <span style="background-color:yellow;">&nbsp;So, the next step is to "add" the file. &nbsp;</span>

<span class="tab_once"><a name="add_file" class="contents">B) Add File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here we go:

<div class="git_box"><span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git add start.txt

<span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        <span style="color:green;">new file:   start.txt</span>
</div>

Bear in mind, "origin" is the name of the repository on your <b>local</b> system. This is where you put all of your cloned files and it resembles everything that's sitting on your Github repository with the exception of any changes you might've made. 

Also, you're in what's referred to as the "master" branch. It's the branch that's created by default when you first set up your local repository. Everything we've been working on thus far has been in the "master" branch, but here's the thing: You're actually two "layers" removed from effecting any permanent changes to your local repository. 

Sandbox - you're saving files, so your work is being perserved, but you have to "add" it to your master branch for those changes to "stick," even where your "branch" is concerned. 

master (branch) - if you like what you've done and you want to make it a permanent piece of the branch you're working in, you "add" it to the branch. At this point, you've <b>staged</b> the new file that you created, but you've not added to "origin." Not yet, anyway. All you've done is placed the work that you've done in the staging area. You haven't even altered your "origin" repository. To do that, we move into what's called "Commit" and from there we will "Push."

<span class="tab_once"><a name="commit" class="contents">C) Commit</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

origin (local repository) - to make your changes a permanent part of our local repository, we'll do a "git commit." That looks like this:

<div class="git_box"><span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git commit -m "Adding new start.txt file"

</div>

The "-m" gives us the chance to include some notes so we can better remember what we've done. 

Now, if we do a "git status," we'll be told that our "origin" repository is up to date with our "master" branch.

<span class="tab_once"><a name="push" class="contents">D) Push</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Finally, we'll "push" our changes to our Github repository like this:

<div class="git_box"><span style="color:green">brucegust@BRUCEGUST59AC</span> <span style="color:purple;">MINGW64</span> <span style="color:yellow;"> ~/projects/github-demo (master)</span>
$ git push origin master
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 309 bytes | 309.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0)
To https://github.com/brucegust/github-demo.git
   cdfe6e5..65a4b84  master -> master</div>
   
 Now your remote repository has been updated according to what you've accomplished in your local repository.
 
 <b>One thing to be aware of: If your Github Repository has timed out, you're going to have to login again and then repeat the above process. At least, that's what happened to me.</b>

 So, let's do a quick "visual" review of what this looks like. Bear in mind, this represents a quick "at a glace" perspective on what the whole GIT process looks like in real life.
 <table class="table">
	<tr>
		<td class="table_title">#</td>
		<td class="table_title">command</td>
		<td class="table_title">result</td>
	</tr>
	<tr>
		<td class="command">1</td>
		<td class="command">create a file</td>
		<td class="command">$ git echo "Test GIT Quick Start Demo" >> start.txt</td>
	</tr>
	<tr>
		<td colspan="3">While you may not use this command a lot, this is a handy way to create a generic file.
		
If you were to do a "git status" command at this point, you would see  something like this:

Untracked files:
(use "git add ..." to include in what will be committed)

<span style="color:red;">start.txt</span></td>
	</tr>
	<tr>
		<td class="command">2</td>
		<td class="command">add a file</td>
		<td class="command">$ git add start.txt</td>
	</tr>
	<tr>
		<td colspan="3">You're "adding" a file to your staging area. Nothing has been set in stone yet - not even on your local repository. To do that, you've got to "commit."
		
If you were to do a "git status" at this point, you would see this:
		
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
(use "git reset HEAD ..." to unstage)

<span style="color:green">new file:   start.txt</span>

So your new file is not longer "untracked," but is now an offical part of your "master" branch, which is what's meant by the system saying that your, "...branch is up to date with 'origin/master.'"</td>
	</tr>
	<tr>
		<td class="command">3</td>
		<td class="command">commit a file</td>
		<td class="command">$ git commit -m "Adding new start.txt file"</td>
	</tr>
	<tr>
		<td colspan="3">Notice the "Adding new start.txt file." These are little "breadcrumps" that you can add to your action to better describe it.

After you finish this action, you'll get a similar message from the system when you "added" a file, only this time it will say that you branch is up to date with your "origin" repository.		

		</td>
	</tr>
	<tr>
		<td class="command">4</td>
		<td class="command">push a file</td>
		<td class="command">$ git push origin master</td>
	</tr>
	<tr>
		<td colspan="3">
You're pushing your local repository, which is called "origin" up to your remote repository. The "master" dynamic is referring to the branch you're on which contains the changes you've made which have been "committed" to the origin repository. 

Perfect!
		</td>
</table>
 
 Here's a graphic that illustrates the "layers" represented by the GIT process... 
 <div style="width:90%; margin:auto; text-align:center; height:auto; padding:5px;"><img src="images/process.png"style="width:700px;"></div>
 
 When you "add" a file, you're moving it to your "staging area." When you "commit," you move it up to your Repository. Finally, when you "push," you're making it a part of your remote respository.
 
 <div class="title">&nbsp;<a name="notepad++">V) GIT / Notepad++ Configuration</a></div> 
 
 <span class="tab_once"><a name="path" class="contents">A) Path</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
 
 <a href="images/advanced.png" target="_blank"><img src="images/advanced.png" style="float:right; margin:10px; width:250px; border:1px solid #cccccc;"></a>After you install Notepad++, the next thing is to get it so it fires up from within the Command Line.
 
 To do that, start by getting the path that represents where the "notepad++.exe" file is located which, in this case, is <span class="blue">C:\Program Files (x86)\Notepad++</span>. 
 
The next thing to do is to adjust your "Path" settings. To do that, start by right clicking on the "My PC" icon in Windows Explorer like what you see to the right and click on "Properties." From there, click on "Advanced System Settings" and then click on "Environment Variables." Highlight "Path" in the list of "System variables" on the bottom then click on "Edit." 

When you click on "Edit," you'll get the dialog box you see to the right. Paste the path of Notepad++ into the field, click "OK" and then close all of the boxes you opened up a moment ago.

<a href="images/environment.png" target="_blank"><img src="images/environment.png" style="float:right; margin:10px; width:250px; border:1px solid #cccccc;"></a>When you're finished, you can type "notepad ++" in your Command Prompt and it will automatically open up the Notepad++ application.

<span style="color:red; font-weight:bold;">Be aware that you're going to have to close Git Bash (or your Command Line window) and restart it to be able to open up Notepad++ from your prompt</span>

<span class="tab_once"><a name=".bash_profile" class="contents">B) .bash_profile</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Set up a new file in Notepad++ called, ".bash_profile" by typing in your Command Line, <span class="blue">notepad++ .bash_profile</span>. When you do that, a new doc opens up in Notepad++ entitled, ".bash_profile." 

Cool.

Now add this code to your new ".bash_profile" doc: <span class="blue">alias npp='notepadd++.exe -multiInst -nosession'</span>. Now, lets set up Notepad++ as GIT's default editor.

<span class="tab_once"><a name="editor" class="contents">C) Default Editor</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To set up Notepad++ as GIT's default editor, enter this command:

<span class="blue">git config --global core.editor "notepad++.exe -multiInst -nosession"</span>

Once that's in place, you want to confirm it so enter this command:

<span class="blue">git config --global --list</span>

When you do that, you'll get this window:

<div class="git_box">C:\Users\brucegust>git config --global --list
user.name=Bruce Gust
user.email=bruce@brucegust.com
core.editor=notepad++.exe -multiInst -nosession</div>

Now to open up a GIT file using Notepad++, do this:

<span class="blue">$ git config --global -e</span> That will open up your config file in Notepad++.

 <div class="title">&nbsp;<a name="basic_git">VI) Basic GIT Commands</a></div> 
 
 While the tutorial is using a Mac Terminal, I'm using GIT Bash, so there's a little discrepancy from time to time between what the tutorial advocates and what I had to do in order to "transpose" what was being said to GIT Bash.
 
 By the way, this is an awesome directory of GIT Commands: <a href="http://www.yolinux.com/TUTORIALS/unix_for_dos_users.html" target="_blank">http://www.yolinux.com/TUTORIALS/unix_for_dos_users.html</a>.
 
 <span class="tab_once"><a name="init" class="contents">A) git init</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
 
 Start by creating your local GIT repository. 
 
 <div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects
$ git init fresh-project
Initialized empty Git repository in C:/Users/brucegust/projects/fresh-project/.git/
</div>

There's nothing in that directory right now, save the ".git" folder which you can see by using the command "ls -a."

<span class="tab_once"><a name="init" class="contents">B) ls -a</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/fresh-project/.git (GIT_DIR!)
$ ls -a
./  ../  config  description  HEAD  hooks/  info/  objects/  refs/
</div>

<span class="tab_once"><a name="status" class="contents">C) git status</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

"git status" tells you what the status of things are...

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/fresh-project (master)
$ git status
On branch master

No commits yet

nothing to commit (create/copy files and use "git add" to track)</div>

This tells you you're on the master branch, there's nothing to commit and there haven't been any commits as of yet.

<span class="tab_once"><a name="hipster" class="contents">D) notepad++ hipster</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You can create a file on the fly. You'll want to make sure that you can call your Notepad++ text editor from your command line. To do that, you're going to create an alias that runs at the very start of GIT Bash. You'll do that by writing a "bashrc" file. "rc" stands for "run commands." You'll place that file in your home directory. You get there by typing "cd ~." 

Once there, you can open up a regular "Notepad" document by typing "$ notepad .bashrc." That will open up Notepad and you can type this: "<a href="https://stackoverflow.com/questions/15298732/invoking-notepad-from-git-bash" target="_blank">alias notepad="/c/Program\ Files\ \(x86\)/Notepad++/notepad++.exe"</a>. 

Once you've done that, you can now type "notepad++ hipster.txt." That will open up a window in Notepad++ and you can type away. Provided you're in your "fresh-project" directory, that will place the "hipster.txt" file in that folder.

<span class="tab_once"><a name="add" class="contents">E) git add</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

If you do a "git status" right now, you'll get this...

<div class="git_box">$ git status
On branch master

No commits yet

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span style="color:red;">hipster.txt</span>

nothing added to commit but untracked files present (use "git add" to track)</div>

You've got a renegade file that's not recognized within the git index. You need to change that!

To do that, you'll do "git add hipster.txt."

After you do that and type "git status," you'll see that "hipster.txt" is now in green.

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/fresh-project (master)
$ git add hipster.txt

brucegust@BRUCEGUST59AC MINGW64 ~/projects/fresh-project (master)
$ git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

        <span class="green">new file:   hipster.txt</span>
</div>

So, "hipster.txt" is now in the staging area. But while it's "staged," it hasn't affected the repository in the least. To make it a legitimate part of the repository, you have to commit it.

<span class="tab_once"><a name="commit" class="contents">F) git commit</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

There's a couple of things to be aware of when you type "git commit." 

After you type, "commit," Notepad++ will open up and you'll get a file that looks like this:
 
 <span class="blue">I'm going to commit new_file.txt<span class="green"> // this is what you type -> something that allows others to get an idea of what you've done</span>
# Please enter the commit message for your changes. Lines starting
# with '#' will be ignored, and an empty message aborts the commit.
#
# On branch master
# Changes to be committed:
#	new file:   new_file.txt
#</span>

Using Notepad++ gives you the chance to add multiple lines. After you save and close that, you'll get something like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/fresh-project (master)
$ git commit
[master (root-commit) faf7924] Adding new file with  hipster impsum This was done with Notepadd++
 1 file changed, 7 insertions(+)
 create mode 100644 hipster.txt</div>

Notice, too, where it says, "root-commit." That's just an indicator to let you know this was the very first "commit" in the repository.

<span class="tab_once"><a name="remove" class="contents">G) git rm -rf</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

If you want to remove your project, just type "rm (remove) - rf (r -> allow recursive removal when a leading directory name is given) f -> override the up-to-date check)

<div class="title">&nbsp;<a name="existing">VII) Adding GIT to an Already Existing Project</a></div> 

<span class="tab_once"><a name="initializr" class="contents">A) Initializr - Sample Project</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

We're going out to "<a href="http://www.initializr.com/" target="_blank">http://www.initializr.com/</a> to download a mock project. 

<span class="tab_twice"><a name="unzip" class="contents">1) unzip</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

We're going to stick the downloaded zip file in our "projects" directory and then use GIT Bash to unzip it by running:

<span class="blue">$ unzip initializr-verekia-4.0.zip</span>

That will open up the zip file and when we run, "ls," we now have:

<span class="blue">fresh-project/  github-demo/  initializr/  initializr-verekia-4.0.zip</span>

"initializr" being the folder that was just created after having unzipped, "initializr-verekia-4.0.zip."

<span class="tab_twice"><a name="rename" class="contents">2) unzip</a></span>

Now, we're going to change the name of the "initializr" folder to something that's a little more palatable by doing this:

<span class="blue">$ mv initializr web-project</span>

Now what was "initializr" is now "web-project."

<span class="tab_once"><a name="init_install" class="contents">B) git init</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

With this command, you're adding the elements that will facilitate the "git repository."

Now, when you do a "git status," you'll see this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/web-project (master)
$ git status
On branch master <span class="green">here's your current branch</span>

No commits yet

Untracked files:
  (use "git add ˙&lt;file&gt;..." to include in what will be committed)

        <span class=":red">.htaccess
        404.html
        apple-touch-icon.png
        browserconfig.xml
        crossdomain.xml
        css/
        favicon.ico
        fonts/
        humans.txt
        index.html
        js/
        robots.txt
        tile-wide.png
        tile.png</span>

nothing added to commit but untracked files present (use "git add" to track)</div>

You're up and running! GIT is now functioning as your version control for this site.

Now, let's kill it!

We'll start by removing the "git" dynamic."

<span class="tab_once"><a name="git_remove" class="contents">C) Remove git</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Type this:

<span class="blue">rm -rf .git</span>

That kills the "git" directory and you're no longer using the "GIT."

<span class="tab_once"><a name="kill_site" class="contents">D) Kill Site</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Let's clean up after ourselves and remove the whole site. Do that by typing this:

<span class="blue">rm -rf web-project</span>

BAM!

<div class="title">&nbsp;<a name="title">VIII) Starting on GitHub by Joining an Already Existing Project</a></div>

<span class="tab_once"><a name="fork" class="contents">A) Fork</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span><a href="images/fork.png" target="_blank"><img src="images/fork.png" style="float:right; margin:10px; width:500px; border:1px solid #ccc;"></a>

You're going to go out to GitHub to the appropriate URL which, in this case, is, <a href="bitly.com/git-start-web" target="_blank">bitly.com/git-start-web</a>. That puts on the site you see displayed to the right.

You're going to click on the button that says, "Fork." That's creating a copy of the master directory and setting it aside as your personal "sandbox," if you will. 

<span class="tab_once"><a name="clone" class="contents">B) Clone</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

After you've successfully created your "fork," you'll see the header text change. Whereas before it said, "scm-ninja/starter-web," not it says, "brucegust/starter-web."

<a href="images/clone.png" target="_blank"><img src="images/clone.png" style="width:250px; float:right; margin:10px; border:1px solid #ccc;"></a>You've created your own branch / fork. Now you're going to clone that to your desktop. 

Go to the "Clone" option you see as it's displayed to the right. Copy the URL and then head over to GIT Bash.

You're going to type, "git clone [the url of the Git Repository]</span>

Take a look:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects
$ git clone https://github.com/brucegust/starter-web.git
Cloning into 'starter-web'...
remote: Enumerating objects: 39, done.
remote: Total 39 (delta 0), reused 0 (delta 0), pack-reused 39
Unpacking objects: 100% (39/39), done.</div>

With that one command, you've copied over all of the files from the Repository into your "projects" directory.

At this point, if we do <span class="blue">ls -al</span> - "a" standing for "all," and "l" standing for "listing directory," you get all of the files in the "starter-web" folder including those files that are usually hidden...

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ ls -al
total 80
drwxr-xr-x 1 brucegust 197121     0 Dec  7 14:11 ./
drwxr-xr-x 1 brucegust 197121     0 Dec  7 14:11 ../
drwxr-xr-x 1 brucegust 197121     0 Dec  7 14:11 <div style="width:150px; text-align:center; border:2px solid #06a5f8; padding:5px; height:auto; display:inline;">.git/</div>
-rw-r--r-- 1 brucegust 197121 30612 Dec  7 14:11 .htaccess
-rw-r--r-- 1 brucegust 197121  4616 Dec  7 14:11 404.html
-rw-r--r-- 1 brucegust 197121  1226 Dec  7 14:11 apple-touch-icon-precomposed.png
-rw-r--r-- 1 brucegust 197121   618 Dec  7 14:11 crossdomain.xml
drwxr-xr-x 1 brucegust 197121     0 Dec  7 14:11 css/
-rw-r--r-- 1 brucegust 197121   766 Dec  7 14:11 favicon.ico
drwxr-xr-x 1 brucegust 197121     0 Dec  7 14:11 fonts/
-rw-r--r-- 1 brucegust 197121   206 Dec  7 14:11 humans.txt
-rw-r--r-- 1 brucegust 197121  5260 Dec  7 14:11 index.html
drwxr-xr-x 1 brucegust 197121     0 Dec  7 14:11 js/
-rw-r--r-- 1 brucegust 197121   139 Dec  7 14:11 README.md
-rw-r--r-- 1 brucegust 197121    35 Dec  7 14:11 robots.txt
-rw-r--r-- 1 brucegust 197121   453 Dec  7 14:11 simple.html
</div>

You'll notice the "git" file that's highlighted in blue. 

<div class="title">&nbsp;<a name="workflow">IX) Basic GIT Workflow</a></div>

<div class="text_box">If you want to "clear" your Git Bash screen of all the commands and code that you've entered up to that point, just enter "clear."</div><span class="tab_once"><a name="add_files" class="contents">A) Add File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Most of this is review / intuitive, but for the sake of drill, navigate to your working directory and type:

<span class="blue">notepad++ hipster.txt</span>

That's going to open up a "notepad ++" page where you can enter in some text. You can grab some random text from <a href="https://hipsum.co/?paras=4&type=hipster-centric&start-with-lorem=1" target="_blank">hipsum.com</a> and save it. Now when you do a "git status," you see this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span class="red">hipster.txt</span>

nothing added to commit but untracked files present (use "git add" to track)</div>

It's an "untracked file." That means you've added something to the "Working Directory," but it's not recognized as an authentic addition to the application just yet.

As far as the way GIT is breaking all this down, it looks like this:

<div style="width:600px; margin:auto; text-align:center; border:1px solid #ccc; box-shadow:5px 5px 3px #ccc;"><a href="images/workflow.png" target="_blank"><img src="images/workflow.png" border="0" style="width:600px;"></a></div>

Now, you want to add "hipster.txt" to the mix so GIT sees it as a legitimate addition to the project. You do that by typing:

<span class="blue">git add hipster.txt</span>

Now, when you do a "git status," you see this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git add hipster.txt

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        <span class="green">new file:   hipster.txt</span>
		
</div>

This is GIT's way of saying that "hipster.txt" is in the "staging" area. See the graphic below...

<div style="width:600px; margin:auto; text-align:center; border:1px solid #ccc; box-shadow:5px 5px 3px #ccc;"><a href="images/staging.png" target="_blank"><img src="images/staging.png" border="0" style="width:600px;"></a></div>
 
 <span class="tab_once"><a name="commit_files" class="contents">B) Commit</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
 
 Now, let's commit this puppy...
 
 <div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git commit
[master 8026ff7] My first commit
 1 file changed, 1 insertion(+)
 create mode 100644 hipster.txt
</div>

After typing, "git commit," if you don't specify any additional parameters, GIT will open up your text editor at which point you'll have the ability to insert a comment. In this instance, I typed, "My first commit." After doing so, you save and close the app and it will return you automatically to your GIT Bash interface. 

If you look at what's now on the GIT screen, you see:

<span class="blue">[master 8026ff7]</span>

"master" refers to the branch you're on. 8026ff7 is a <a href="https://en.wikipedia.org/wiki/Secure_Hash_Algorithms" target="_blank">SHA</a> which stands for "Single Hashmark Algorithm" and it's a security measure. The rest is pretty intuitive.

Now, if you do a "git status," you get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean
</div>

What this is saying is that you working directory is ahead of your master branch by one commit. Graphically, it looks like this:

<div style="width:600px; margin:auto; text-align:center; border:1px solid #ccc; box-shadow:5px 5px 3px #ccc;"><a href="images/commit.png" target="_blank"><img src="images/commit.png" border="0" style="width:600px;"></a></div>

<span class="tab_once"><a name="pull_files" class="contents">C) Pull</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
 
 While it may not be obvious at first glance, before you "push" anything to the master repository, you want to make sure that you're up to date with everything that's there. Remember, you might have other people working on other files and you don't want to overwrite something they might have worked on. So, to do that, you start with a "pull" command.
 
 To do that, you enter <span class="blue">git pull origin master</span>
 
 <div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git pull origin master
From https://github.com/brucegust/starter-web
 * branch            master     -> FETCH_HEAD
Already up to date.
</div>

GIT's going to look at everything other than what you've been working on and compare that to what you've been working on and ensure that you're up to date with all the files as they currently exist. In this example, you can be assured that you're good to go based on the "Already up to date" message.

So, let's "push" what we've got up to your forked repository.

<span class="tab_once"><a name="push_files" class="contents">D) Push</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's how this is going to look:

<div style="width:600px; margin:auto; text-align:center; border:1px solid #ccc; box-shadow:5px 5px 3px #ccc;"><a href="images/push.png" target="_blank"><img src="images/push.png" border="0" style="width:600px;"></a></div>

Here's the command we're going to use to faciliate all of this:

<span class="blue">git push origin master</span>

"origin" is the name of the remote repository we cloned from. It's a convention that defines the initial source of our files. "master" is name of the branch on our local repository.

After you press &lt;enter&gt;, you get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git push origin master
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 550 bytes | 550.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/brucegust/starter-web.git
   4beb7f0..8026ff7  master -> master
</div>

This gives you all kinds of information related to what you just did. The bottom line is the last bit of text that shows how you went from your local master to the "master" branch of your local repository. 

Good to go!

After doing this, if you go to your remote repository, you can see the file that you just "pushed..."

<div style="width:600px; margin:auto; text-align:center; border:1px solid #ccc; box-shadow:5px 5px 3px #ccc;"><a href="images/hipster.png" target="_blank"><img src="images/hipster.png" border="0" style="width:600px;"></a></div>

<div class="title">&nbsp;<a name="tracked">X) Tracked Files</a></div>

<span class="tab_once"><a name="config" class="contents">A) Configuration</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To change your config file quickly and easily, do this:

<span class="blue">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ notepad++ ~/.gitconfig</span>

You'll start by invoking the "notepad++" program and then typing the "tilde" character to get to your home directory and then accessing the ".gitconfig" file.

GIT's going to process that as a cue to bring up your config file so you'll something like this:

<span class="blue">[user]
	name = Bruce Gust
	email = bruce@brucegust.com
[core]
	editor = notepad++.exe -multiInst -nosession</span>
	
<span class="tab_once"><a name="tracking_files" class="contents">B) Keeping Track of your Files | ls-files</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>	
	
You can see what GIT is "tracking," by typing:

<span class="blue">git ls-files</span>

When you do that, you get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git ls-files
.htaccess
404.html
README.md
apple-touch-icon-precomposed.png
crossdomain.xml
css/bootstrap-theme.css
css/bootstrap-theme.css.map
css/bootstrap-theme.min.css
css/bootstrap.css
css/bootstrap.css.map
css/bootstrap.min.css
css/main.css
favicon.ico
fonts/glyphicons-halflings-regular.eot
fonts/glyphicons-halflings-regular.svg
fonts/glyphicons-halflings-regular.ttf
fonts/glyphicons-halflings-regular.woff
hipster.txt
humans.txt
index.html
js/main.js
js/plugins.js
js/vendor/bootstrap.js
js/vendor/bootstrap.min.js
js/vendor/jquery-1.11.0.min.js
js/vendor/modernizr-2.6.2-respond-1.1.0.min.js
robots.txt
simple.html
</div>

This is important, because you have access to a shortcut that only works with files that are being tracked. Check it out.

<span class="tab_once"><a name="commit_am" class="contents">C) Add / Commit Shortcut | commit -am</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git commit -am "Adding more ipsum text"
</div>

"commit" -> we already know what that means
"a" -> add to stage
"m" -> commit message

This reapresents a great little shortcut in that we don't have to do, "add" and then "commit." This one line takes care of all of that in one fell swoop.

<div class="git_box">$ git commit -am "Adding more ipsum text"
[master 36023a8] Adding more ipsum text
 1 file changed, 1 insertion(+)
 create mode 100644 new_file.txt
</div>

This only works on files that GIT is tracking. You can't do this on a brand new file. 

<div class="title">&nbsp;<a name="edit">XI) Editing Files</a></div>

Be careful of the aforementioned shortcut in that you don't want to contend with multiple files, some of which need to be added and others need to be committed...

The only time you want to use the "commit -am" shortcut is when you're working on one file and you're in and out. Otherwise, you want to use the long way...

<span class="blue">git add hipster.txt</span>

...then...

<span class="blue">git commit -m "adding more text"</span>

Again, when you're working on multiple files which, by default are going to be "added" and "committed" differently, save the "commit -am" for those times when you're working on just one file rather than several files simultaneoulsy.

<div class="title">&nbsp;<a name="recursive">XII) Adding Files Recursively</a></div>

<span class="tab_once"><a name="mkdir" class="contents">A) Make Directory | mkdir</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Let's start by making a directory which you can do in GIT by typing this:

<span class="blue">$ mkdir -p level1/</span>

This is going to add a folder named, "level1."

For the sake of brevity, imagine adding a file to this directory and then, within that same directory, you've got another folder with another file and so on and so forth. 

This represents a bit of a laborious process when it's time to "add" and "commit." But you can do it all in one fell swoop with this command...

<span class="tab_once"><a name="recursive_add" class="contents">B) Add Files Recursively | add .</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Right now, if you did a "git status," you would get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 3 commits.
  (use "git push" to publish your local commits)

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span class="red">level1/</span>

nothing added to commit but untracked files present (use "git add" to track)
</div>

<div style="border:1px solid #ccc; border-radius:10pt; margin:10px; box-shadow:5px 5px 3px #ccc; width:400px; font-size:9pt; height:auto; padding:10px; float:right;">status -u

What you see above represents an excellent illustration of a GIT command that you're going to want to be aware of, especially if you're working on a project over a period of time and you forget what you actually edited. To see what specific file within the, in this case, <span class="red">level1</span> directory, simply type <span class="blue">status -u</span>. That will give you this:

<span class="red">level1/level1.file.txt</span>

Great little tool to have when you need some additional perspective!</div>You've got several new directories and several new files, but while you've got those changes represented by, "Your branch is ahead of 'origin/master' by 3 commits," you don't see any of that save, "level1/."

To add all of the changes that you've made at once, just do this:

<span class="blue">git add .</span>

Throwing that "." in there tells GIT to add everything. So, now, after you type in "git status," you get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 3 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        <span class="green">new file:   level1/level1.file.txt
        new file:   level1/level2/level2.file.txt</span>
</div>

All of the changes that you've made are now ready to be committed and you're all set!

<div class="title">&nbsp;<a name="backing_out">XIII) Backing Out</a></div>

We're going to open up the "level1.file.txt" file in the "level1" directory. When we do a "git status" right now, we're told that we've got a clean working directory. Thus, we know for certain that the current condition of this file is what's been committed. 

<span class="tab_once"><a name="reset" class="contents">A) Reset</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's your situation: You've altered a file, you've "added" it to the GIT index and now you're getting ready to commit it. Say, however, you've changed your mind and you want to "un-add" it. 

No problem!

Just use the "reset" command in GIT.

<div class="git_box" style="height:350px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 4 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

        <span class="green">modified:   level1.file.txt</span> <span class="yellow">here's your current "status," as far as a file that has been "committed..."</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git reset HEAD level1.file.txt <span class="yellow">here's what you use to "unstage" a prior "add" command</span>
Unstaged changes after reset:
M       level1/level1.file.txt

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 4 commits.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

        <span class="red">modified:   level1.file.txt</span> <span class="yellow">notice how the file is documented in red, indicating that it is no longer "committed."</span>

no changes added to commit (use "git add" and/or "git commit -a")

</div>

<span class="tab_once"><a name="checkout" class="contents">B) Checkout</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

"Reset" clears the GIT index of anything that's been "committed." But what if you want to get back to the original state of your file? What if you want to do more than just change it's status where GIT is concerned and actually go back to what you had at the very beginning?

No problem!

<div class="git_box">Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">modified:   level1.file.txt</span> <span class="yellow">file hasn't been committed, but it's been "added."</span>

no changes added to commit (use "git add" and/or "git commit -a")

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git checkout level1.file.txt <span class="yellow">here we go..."checkout" means we're returning the file back to its original state...</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 4 commits.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean <span class="yellow">now when we do a "git status," you can see that nothing is in the GIT index where this file is concenred</span>
</div>

<div class="title">&nbsp;<a name="moving">XIV) Moving and Renaming Files</a></div>

<span class="tab_once"><a name="rename" class="contents">A) Rename Files</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

There's actually two ways to pull this off. The first way is simply typing "mv..."

<span class="tab_twice"><a name="mv" class="contents">1) mv<a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

With this approach, GIT is going to see this as two separate commands. Take a look:

Type <span class="blue">mv original_file_name new_file_name</span>

Like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ mv level1.file.txt level1.txt <span class="yellow">here's your command...</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git status <span class="yellow">now, when you do a git status...</span>
On branch master
Your branch is ahead of 'origin/master' by 4 commits.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">deleted:    level1.file.txt</span> <span class="yellow">this is the first command that GIT executes: It deletes the original file...</span>

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span class="red">level1.txt</span> <span class="yellow">here's the second command -> name change has been added, but not committed...</span>

no changes added to commit (use "git add" and/or "git commit -a")

</div>

To update the GIT index so it's processing the name change as something permanent, you have to "commit" the change. You do that by typing "git -A."

After that, you get this:

<span class="green"> renamed:    level1.file.txt -> level1.txt</span>

<span class="tab_twice"><a name="git_mv" class="contents">2) git mv<a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

It goes quicker when you preface your "mv" command with "git." Take a look:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git mv level1.txt level1.file.txt

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ ls
level1.file.txt  level2/<span class="yellow">observe...</span>
</div>

So, now that the file has been renamed , we'll do a commit.

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1 (master)
$ git commit
[master 9cb1149] renamed the file
 1 file changed, 0 insertions(+), 0 deletions(-)
 rename level1/{level1.file.txt => level1.txt} (100%) <span class="yellow">this shows us that the file was renamed and we've got a "100%" confidence level</span>
</div>

Should you decide after the fact that you don't want to change your file's name, rather than doing a "reset" or "checkout," you can just change the name using the "mv" command and it will be fine.

<span class="tab_once"><a name="move_files" class="contents">B) Move Files</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To move a file, you use something very similar. Look at what's written below.

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2 (master)
$ ls
level2.file.txt  level3/ <span class="yellow">here are the contents of your level2 directory</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2 (master)
$ mv level2.file.txt level3 <span class="yellow">here's the command you need to move level2.file.txt to the level3 folder</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2 (master)
$ cd level3

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2/level3 (master)
$ ls
level2.file.txt  level4/ <span class="yellow">here are the contents of level3. Notice how the level2.file.txt file has been moved</span>
</div>

Once you've made those changes, you do a <span class="blue">git add -A</span> and that adds all of the changes you've made to the staging area. By the way, <span class="blue">git add -A</span> will add all files in your current directory to the staging area. <span class="blue">git add -u</span> will only add those that are currently being tracked (click <a href="https://stackoverflow.com/questions/572549/difference-between-git-add-a-and-git-add?rq=1" target="_blank">here</a> for more info about those commands).

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2/level3 (master)
$ git add -A

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2/level3 (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 5 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

        <span class="green">renamed:    ../level2.file.txt -> level2.file.txt</span>
</div>

It is possible to move and / or rename a file apart from GIT. When you do that, however, you do want to make sure those changes are showing up in the GIT directory. So, after you do that, run <span class="blue">git status</span> and you'll see the changes look something like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/level1/level2 (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 5 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        <span class="green">renamed:    level2.file.txt -> level3/level2.file.txt</span>

Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">deleted:    level3/level2.file.txt</span> <span class="yellow">you can see how our moving the file is represented by GIT as two separate steps</span>

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span class="red">level2.file.txt</span>
</div>
<a href="images/ds_store.png" target="_blank"><img src="images/ds_store.png" style="width:350px; margin:10px; float:right;"></a>One thing to be aware of at this point. 

If you look to the right, you'll see the way this process is viewed by GIT on a Mac. Notice the "../DS_Store" dynamic. This is how moving a file from one directory to another is documented in GIT when you're working on a Mac. You don't want that syntax to be added to the GIT index. So, you'll want to add <span class="red">level2.file.txt</span> to your GIT dynamic individually by typing <span class="blue">add level2.file.txt</span> rather than <span class="blue">add -A</span> which is going to add everything. Again, this (appears) to be something unique to a Mac OS.



<div class="title">&nbsp;<a name="deleting">XV) Deleting Files</a></div>

<span class="tab_once"><a name="delete_untracked" class="contents">A) Deleting an Untracked File | rm</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Take a look at this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git rm doomed.txt
fatal: pathspec 'doomed.txt' did not match any files

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ rm doomed.txt <span class="yellow">use the OS's facility to delete the file</span>
</div>

If you try to delete an untracked file using <span class="blue">git rm</span>, GIT will complain and tell you that,  "...did not match any files" because your file is currently untracked and not in the GIT index.

However, as seen above, you can use the Operating System's facility to delete the file and you are good to go!

<span class="tab_once"><a name="delete_tracked" class="contents">B) Deleting a Tracked File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="list_all_files" class="contents">1) List All Files | ls-files &amp; ls</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Before we get into how you delete a tracked file, let's pause for a minute and take a look at how you would list <u>every</u> file that GIT is tracking. 

To do that, you can use <span class="blue">git ls-files</span> When you type that command, you get this:

<div class="git_box" style="height:350px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git ls-files
.htaccess
404.html
README.md
apple-touch-icon-precomposed.png
crossdomain.xml
css/bootstrap-theme.css
css/bootstrap-theme.css.map
css/bootstrap-theme.min.css
css/bootstrap.css
css/bootstrap.css.map
css/bootstrap.min.css
css/main.css
favicon.ico
fonts/glyphicons-halflings-regular.eot
fonts/glyphicons-halflings-regular.svg
fonts/glyphicons-halflings-regular.ttf
fonts/glyphicons-halflings-regular.woff
hipster.txt
humans.txt
index.html
js/main.js
js/plugins.js
js/vendor/bootstrap.js
js/vendor/bootstrap.min.js
js/vendor/jquery-1.11.0.min.js
js/vendor/modernizr-2.6.2-respond-1.1.0.min.js
level1/level1.txt
new_file.txt
robots.txt
simple.html
</div>

Compare that to what you get when you type <span class="blue">ls</span>

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ ls
404.html                          favicon.ico  index.html    README.md
apple-touch-icon-precomposed.png  fonts/       js/           robots.txt
crossdomain.xml                   hipster.txt  level1/       simple.html
css/                              humans.txt   new_file.txt
</div>

<span class="blue">git ls-files</span> is going to reveal all of the files in all your directories as well as what's in your current directory. In other words, it's a comprehensive snapshot of EVERYTHING you've got in your folder. <span class="blue">ls</span>, on the other hand, is going to give you the folders etc., but the not files within those folders.

<span class="tab_twice"><a name="git_rm" class="contents">2) git rm</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To delete a tracked file, you'll simply type <span class="blue">git rm &lt;file name&gt;</span> and that will eliminate the file that you specify. 

<span class="tab_twice"><a name="confirm_delete" class="contents">3) Confirm Delete</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

After you delete the file, you need to ensure those changes are reflected in your Repository, so you have to commit those changes. 

While this has already been discussed to some extent, it's good to review. <ul><li>when you commit a change, you've got more than one option available to you and you need to know which one is best</li><li>when you type <span class="blue">git commit</span>, you're committing everything that's been staged and your text editor will automatically open up so you can type in a message using that interface</li><li>when you type <span class="blue">git commit -a -m</span>, this adds all tracked files to the staging area and commits them in one step. That's EVERYTHING that GIT is tracking!</li></ul>Finally, when you type, <span class="blue">git commit -m</span>, you're committing everything that's in the staging area and you're going to enter your message right there on your terminal. For more information on these different commands, click <a href="https://teamtreehouse.com/community/git-commit-a-m-new-message-commits-all-changes-so-what-happens-when-i-just-type-git-commit-m-new-message " target="_blank">here</a>.

So, generally speaking, you'll do what you see below:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git add -A <span class="yellow">add everything that's being tracked</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 6 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   level1/level2/level2.file.txt
        deleted:    new_file.txt
		
$ git commit <span class="yellow">commits everything in the staging area and opens up your text editor to document a note</span>
[master 4ca54a5] deleting a file
 2 files changed, 5 insertions(+), 1 deletion(-)
 create mode 100644 level1/level2/level2.file.txt
 delete mode 100644 new_file.txt
</div>

<span class="tab_once"><a name="undoing_delete" class="contents">C) Undoing a Delete | reset, checkout</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Check it out:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ ls <span class="yellow">see what's here</span>
404.html                          favicon.ico  index.html  robots.txt
apple-touch-icon-precomposed.png  fonts/       js/         simple.html
crossdomain.xml                   <span class="blue">hipster.txt</span>  level1/
css/                              humans.txt   README.md

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git rm hipster.txt <span class="yellow">the command we use to delete a file</span>
rm 'hipster.txt'

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 7 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        <span class="green">deleted:    hipster.txt</span> <span class="yellow">the fact that we've deleted a file has been staged in the GIT index</span>
</div>

Now if we want to undo the delete that has just been staged, we start by unstaging it using the "HEAD" dynamic:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git reset HEAD hipster.txt <span class="yellow">here's our command...</span>
Unstaged changes after reset:
D       hipster.txt

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 7 commits.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">deleted:    hipster.txt</span> <span class="yellow">it's no longer being "staged," but it's still and "added" change and the file itself has not been restored</span>

no changes added to commit (use "git add" and/or "git commit -a")
</div>

This removes the file from the staging area, but it doesn't restore the file itself. To do that, we've got to do one more command. 

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git checkout -- hipster.txt <span class="yellow">you've got to be real careful in the way you document this, but this is the command to restore the file</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ ls
404.html                          favicon.ico  index.html  robots.txt
apple-touch-icon-precomposed.png  fonts/       js/         simple.html
crossdomain.xml                   hipster.txt  <span class="yellow">and here it is!</span> level1/
css/                              humans.txt   README.md
</div>

<span class="blue">git checkout -- &lt;file name&gt;</span>

Write it down!

<span class="tab_once"><a name="without_git" class="contents">D) Deleting a File Without GIT</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Up to now, all of the "delete" commands have been prefaced with "git." You can delete a file just by using the regular <a href="https://en.wikipedia.org/wiki/Bash_(Unix_shell)" target="_blank">BASH</a> commands.

It'll look like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ rm hipster.txt <span class="yellow">here's your delete command sans the "git" dynamic</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 7 commits.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">deleted:    hipster.txt</span> <span class="yellow">had you used "git" in your "rm" command, this would be in green. It would've already been staged.</span>

no changes added to commit (use "git add" and/or "git commit -a")
</div>

So, you can use a regular BASH command, you'll just have to go through the extra steps of adding it then committing it.

<span class="tab_once"><a name="directory_git" class="contents">E) Deleting an Entire Directory</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You can delete an entire directory in one fell swoop using this command:

<div class="git_box" style="height:350px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ rm -rf level1 <span class="yellow">here's your command. Be real careful with this command because you can do a lot of damage!</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 7 commits.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">deleted:    hipster.txt
        deleted:    level1/level1.txt
        deleted:    level1/level2/level2.file.txt</span> <span class="yellow">tracked but not added to the working directory</span>

no changes added to commit (use "git add" and/or "git commit -a")

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git add -A <span class="yellow">staging the changes...</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 7 commits.
  (use "git push" to publish your local commits)

Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

        <span class="green">deleted:    hipster.txt
        deleted:    level1/level1.txt
        deleted:    level1/level2/level2.file.txt</span> <span class="yellow">everything is now staged, ready to be committed</span>


brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git commit <span class="yellow">and...done</span>
[master 61d53ac] deleting level1 directory
 3 files changed, 17 deletions(-)
 delete mode 100644 hipster.txt
 delete mode 100644 level1/level1.txt
 delete mode 100644 level1/level2/level2.file.txt
</div>

<div class="title">&nbsp;<a name="history">XVI) History</a></div>

This section gives you a bunch of really helpful info about how to view the "history" of a particular file and even your entire application.

<span class="tab_once"><a name="help" class="contents">A) Help File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Start with this: <span class="blue">git help log</span>

That will bring up a web brower that features a cheat sheet of all kinds of commands relative to the "log" dynamic. There's a lot of info here, so be aware of that going forward as it represents a great deal of assistance when you're trying to weed through all this.

<span class="tab_once"><a name="log" class="contents">B) Log</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="everything" class="contents">1) List Everything | git log</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

When you do <span class="blue">git log</span>, you get a listing of all the commits that you've executed going all the way to the beginning of your app arranged chronologically descending. Check it out:

<div class="git_box" style="height:350px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git log
commit 61d53ace62e4ebffe4d906166dec56ded81c59e3 (HEAD -&gt; master)
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Wed Dec 12 14:14:37 2018 -0600

    deleting level1 directory

commit 4ca54a55f09eee731b9db285ba80431aad2226c2
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Wed Dec 12 10:48:14 2018 -0600

    deleting a file

commit adef97dff043eadb6e7829e07c029ab28aa4c6b1
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Tue Dec 11 14:07:37 2018 -0600

    moved file back to its original location

commit 9cb11494c6a4bf76a0ae103273c919e144cf1099
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Tue Dec 11 12:54:18 2018 -0600

    renamed the file

commit 7a988556686f07d637d3f843a61da90c86e146f2
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 12:48:17 2018 -0600

    Adding several files recursively!

commit e478fc2d798a7dc93731e2cf0ef30d6a06e836c6
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 10:09:12 2018 -0600

    more ipsum for hipsters

commit 36023a82c04beac0b543caeef2b87d2e56bfb7f4
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 09:56:53 2018 -0600

    Adding more ipsum text

commit 149f1c204fdcea56ca889127d4963e07f5ad27bb
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 09:24:05 2018 -0600
:
</div>

<span class="tab_twice"><a name="everything" class="contents">2) Abbreviated SHA Value | git log --abbrev-commit</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You may not want to see all of that info, especially the entire SHA1 value. To shorten that, do this:

<div class="git_box" style="height:350px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git log --abbrev-commit <span class="yellow">--abbrev commit...that will do it&lt;/span&gt;
commit 61d53ac (HEAD -&gt; master)
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Wed Dec 12 14:14:37 2018 -0600

    deleting level1 directory

commit 4ca54a5
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Wed Dec 12 10:48:14 2018 -0600

    deleting a file

commit adef97d
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Tue Dec 11 14:07:37 2018 -0600

    moved file back to its original location

commit 9cb1149
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Tue Dec 11 12:54:18 2018 -0600

    renamed the file

commit 7a98855
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 12:48:17 2018 -0600

    Adding several files recursively!

commit e478fc2
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 10:09:12 2018 -0600

    more ipsum for hipsters

commit 36023a8
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 09:56:53 2018 -0600

    Adding more ipsum text

commit 149f1c2
Author: Bruce Gust &lt;bruce@brucegust.com&gt;
Date:   Mon Dec 10 09:24:05 2018 -0600
:
</div>

<span class="tab_twice"><a name="one_line">3) 1 Line | git log --oneline --graph --decorate</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This is probably my favorite!

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git log --oneline --graph --decorate
* 61d53ac (HEAD -> master) deleting level1 directory
* 4ca54a5 deleting a file
* adef97d moved file back to its original location
* 9cb1149 renamed the file
* 7a98855 Adding several files recursively!
* e478fc2 more ipsum for hipsters
* 36023a8 Adding more ipsum text
* 149f1c2 Adding more ipsum text
* 8026ff7 (origin/master, origin/HEAD) My first commit
*   4beb7f0 Merge pull request #6 from jasongtaylor/feature-readme
|\
| * e73f914 Adding Purpose section to README
| * 34f563b Adding README file
|/
* 5c05047 Copying files from initializr project zip file and then creating simple.html as basis for super simple pages
</div>

<div class="title" class="contents">&nbsp;<a name="alias">XVII) Alias</a></div>

<span class="tab_once"><a name="oneline" class="contents">A) git log -all --graphi --decorate --oneline</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

The above command results in a sharp looking list that summarizes your git activity. But it's an awful lot of typing. You can create your own shorthand that will produce the same result. 

Check it out:

<span class="tab_twice"><a name="hist" class="contents">1) hist</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Type <span class="blue">git hist</span>. This will reveal whether or not the alias, "hist," exists. If it doesn't git will respond with a suggestion as opposed to an actual action. 

So now, let's make "hist" the shorthand command for the aforementioned code!

<span class="tab_twice"><a name="hist" class="contents">2) git config --global alias.hist</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To create an alias, we'll use what we've got above and add the actual script in double quotes, like this:

<span class="blue">PS C:\Users\brucegust\projects\starter-web> git config --global alias.hist "log --all --graphi--decorate --oneline"</span>

That will do the trick, right?

Well, no. We spelled "graphi" incorrectly. So, when we type <span class="blue">git hist</span>, we'll get something from git that says it doesn't understand what we're trying to do. 

So, now we've got to go in an edit this mess!

<span class="tab_twice"><a name="edit_hist" class="contents">3) Edit Alias's</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Type this command and it will open up the right file in your text editor:

<span class="blue">git config --global --edit</span>

Make your changes so you now have <span class="blue">git config --global --graph --decorate --oneline</span>. Save and close your text editor. Now when you type <span class="blue">git hist</span>, you get this:

<div class="git_box">PS C:\Users\brucegust\projects\starter-web> <span class="yellow">git</span> config --global --edit
PS C:\Users\brucegust\projects\starter-web> <span class="yellow">git</span> hist
* 61d53ac (<span class="blue">HEAD</span> -> <span class="green">master</span>) deleting level1 directory
* 4ca54a5 deleting a file
* adef97d moved file back to its original location
* 9cb1149 renamed the file
* 7a98855 Adding several files recursively!
* e478fc2 more ipsum for hipsters
* 36023a8 Adding more ipsum text
* 149f1c2 Adding more ipsum text
* 8026ff7 (<span class="red">origin/master, origin/HEAD</span>) My first commit
*   4beb7f0 Merge pull request #6 from jasongtaylor/feature-readme
|\
| * e73f914 Adding Purpose section to README
| * 34f563b Adding README file
|/
* 5c05047 Copying files from initializr project zip file and then creating simple.html as basis for super simple pages
PS C:\Users\brucegust\projects\starter-web></div>

<div class="title" class="contents">&nbsp;<a name="ignore">XVIII) Ignoring Unwanted Files</a></div>

<span class="tab_once"><a name="gitignore" class="contents">A) .gitignore</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="al" class="contents">1) ls -al</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You want to ignore certain files. By that I mean, you want to make a point of telling GIT to ignore specific files and not include them in what's being staged, committed, etc.

By using <span class="blue">ls -al</span>, you can see all the files in your directory - including the hidden files. Remember that going forward...

<span class="tab_twice"><a name="create_gitignore" class="contents">2) Create gitignore File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To create a gitignore file, type <span class="blue">notepad++ .gitignore</span>. That will open up your text editor at which point you can document any file you want GIT to ignore. Right now, you don't have anything, but we'll change that it just a minute.

After you create your <span class="blue">.gitignore</span> file, add and commit it.

<span class="tab_once"><a name="overlook" class="contents">B) Documenting What You Want to Ignore</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Now that your .gitignore file is up and running, let's do this: Create an "access.log" file. Put some random text in there and save it. If you were to do a <span class="blue">git status</span>, you would see that file as something that GIT is tracking and is suggesting that you add and commit it. 

Nope.

Add this to your <span class="blue">.gitignore</span> file so it doesn't show up. 

Like this:

<div class="git_box" style="height:250px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ notepad++ access.log

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 9 commits.
  (use "git push" to publish your local commits)

Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)

        <span  class="red">access.log</span> <span class="green">//you've created this file and GIT sees it as something that needs to be added</span>

nothing added to commit but untracked files present (use "git add" to track)

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ notepad++ .gitignore <span class="green">// open up your ".gitignore" file with notepad++ and add "*log" to include any file with a ".log" suffix</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 9 commits.
  (use "git push" to publish your local commits)

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

        <span class="red">modified:   .gitignore</span> <span class="green">// you'll want to add and commit this. Notice "access.log" doesn't show up anymore</span>

no changes added to commit (use "git add" and/or "git commit -a")</div>

<span class="tab_once"><a name="ignore_directory" class="contents">C) Ignoring an Entire Directory</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="roger_that" class="contents">1) mkdir, copy and move</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

There's some handy commands leading up to ignoring an entire directory. Take a look...

<div class="git_box" style="height:250px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ mkdir log <span class="green">use "mkdir log" to create a folder called "log"</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ mv access.log log <span class="green">// use "mv access.log log" to move the "access.log" file to the "log" directory</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ cd log

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/log (master)
$ ls
access.log <span class="green">// we're in the "log" directory now and we're seeing the file that we just moved</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/log (master)
$ cp access.log access_2018_12-29.log <span class="green">// here we're using "cp access.log access_2018_12-29" to copy the "access.log" file and create another file with the same content and we're calling it "access_2018_12-29."</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web/log (master)
$ ls
access.log  access_2018_12-29.log</div>

<span class="tab_twice"><a name="kill_folder" class="contents">2) Ignore Directory</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To ignore an entire folder, just add the folder name to your ".gitignore" file. In this case, we're wanting to ignore the "log" folder where we've got all of our "*.log" files. All we need to do, then, is change "*.log" to "log/" and we're gold!

Once we've done that, we can add and commit our changes using the shortcut, <a href="#commit_am">commit -am</a> which saves "all" of the modified files and gives us the opportunity to do our "message [m]" in line.

And that's it!

<div class="title" class="contents">&nbsp;<a name="push_origin">XIX) Cleanup and Push Back to Origin</a></div>

Cleaning up your GIT Bash screen, pulling from your repository to ensure you're up to date with what's been done apart from your local box and pushing all of your changes up to your master fork / branch.

What you see below represents all of the commands that you need to push all of your work up to your master fork / branch.

<div class="git_box" style="height:250px; overflow-y:scroll;">brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git pull origin master <span class="green">pull everything that's been done apart from what you've done on your local box so you're up to date with the most recent version of your app</span>
From https://github.com/brucegust/starter-web
 * branch            master     -> FETCH_HEAD
Already up to date. <span class="green">up to date</span>

brucegust@BRUCEGUST59AC MINGW64 ~/projects/starter-web (master)
$ git push origin master <span class="green">//push everything up to your fork / branch</span>
Counting objects: 34, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (28/28), done.
Writing objects: 100% (34/34), 4.33 KiB | 886.00 KiB/s, done.
Total 34 (delta 13), reused 0 (delta 0)
remote: Resolving deltas: 100% (13/13), completed with 1 local object.
To https://github.com/brucegust/starter-web.git
   8026ff7..01b10fd  master -> master
</div>

<div class="title">&nbsp;<a name="comparisons" style="color:#ffffff;">XX) Comparisons</a></div>

<span class="tab_once"><a name="work_stage" class="contents">A) Working Directory and Staging Area</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="diff" class="contents">1) git diff</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You can use the <span class="blue">git diff</span> command to see the differences in a particular file that you've been working on. For example, you've changed the file and added it to the working directory (it's listed in green). Say you stepped away for a moment, opened the same file and did some additional changes. Now when you do a <span class="blue">git status</span>, you would see something like this:

<div class="git_box" style="height:250px; overflow-y:scroll;">$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        <span class="green">modified:   README.md</span>

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        <span class="red">modified:   README.md</span>


brucegust@BRUCEGUST59AC MINGW64 /C/users/brucegust/projects/starter-web (master)
$ git diff
diff --git a/README.md b/README.md
index 72e993b..0f67d00 100644
--- a/README.md
+++ b/README.md
@@ -8,7 +8,7 @@ Sample website with plenty of files for demos

 ##Deployment

<span class="red">-Just throwing some random text around.</span>
<span class="green">+Just throwing some random text around. One more little change...</span>

 ## What is ".md"</div>

What's in green represents the change that is most recent and hasn't been staged.

<a href="images/difftool.png" target="_blank"><img src="images/difftool.png" style="width:400px; margin:10px; float:right;"></a><span class="tab_twice"><a name="difftool" class="contents">2) difftool</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Another tool you can use is the "difftool" which you can bring up by typing <span class="blue">git difftool</span> and it will bring up the screen that you see to the right. There you can see the differences laid out in a way that's really vivid.

<span class="tab_twice"><a name="p4merge" class="contents">3) p4Merge</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<a href+"https://www.perforce.com/products/helix-core-apps/merge-diff-tool-p4merge" target="_blank">p4Merge</a> is a great little tool to see the differences between two files. Althought the aforementioned approach works just fine, this particular tool makes things a bit more discernible.

Download the app and then use the following commands in Git Bash to get it up and running as your default "difftool..."

<div class="git_box">b.gust@AHA-DT-BGUST2 MINGW64 ~
$ p4merge

b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global merge.tool p4merge <span class="green">// this is just to confirm the path that you've documented in your Environment Variables. After entering this, you'll get a p4Merge prompt provided it's been installed correctly.</span>

b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global mergetool.p4merge.path "C:/Program Files/Perforce/p4merge.exe"
b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global mergetool.prompt false

b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global diff.tool p4perge

b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global difftool.p4merge.path "C:/Program Files/Perforce/p4merge.exe"

b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global difftool.prompt false

b.gust@AHA-DT-BGUST2 MINGW64 ~
$ git config --global --list
user.name=Bruce Gust
user.email=bruce@brucegust.com
merge.tool=p4merge
mergetool.p4merge.path=C:/Program Files/Perforce/p4merge.exe
mergetool.prompt=false
diff.tool=p4perge
difftool.p4merge.path=C:/Program Files/Perforce/p4merge.exe
difftool.prompt=false</div>

<span class="tab_once"><a name="working_directory" class="contents">B) Working Directory and GIT Repository (last commit)</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To compare what we've got in our working directory with what we've got in our repository, we use <span class="blue">git diff HEAD</span>. It looks like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/users/brucegust/projects/starter-web (master)
$ git diff HEAD
diff --git a/README.md b/README.md
index f82a519..0f67d00 100644
--- a/README.md
+++ b/README.md
@@ -6,6 +6,10 @@ This repository is for showing how Git and GitHub work

 Sample website with plenty of files for demos

<span class="green">+##Deployment
+
+Just throwing some random text around. One more little change...</span>
+
 ## What is ".md"

 "md" stands for "mark down" and is a glorified text file
\ No newline at end of file</div>

Like before, you can also use the "difftool." In this instance, you would use "difftool HEAD" and you would get what you see below:

<div style="width:auto; margin:auto; text-align:center;"><a href="images/difftool_HEAD.png" target="_blank"><img src="images/difftool_HEAD.png" border="0"></a></div>

What's on the left represents your repository. What's on the right is what you've got in your Staging Area.

<span class="tab_once"><a name="specific_files" class="contents">C) Comparing Repository to Specific Files</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

If you want to compare what you're getting ready to commit to what's in your repository, you use this:

<div class="git_box" style="text-align:left; height:350px; overflow-y:scroll;">Changes to be committed:
(use "git reset HEAD <file>..." to unstage)

	<span class="green">modified:   README.md</span>

Changes not staged for commit:
(use "git add <file>..." to update what will be committed)
(use "git checkout -- <file>..." to discard changes in working directory)

	<span class="red">modified:   README.md
	modified:   index.html</span>
	
<span class="yellow">//you see how we've got two files that have been altered. To see how just the "index.html" file compares with our "origin/master" file, we do this:</span>

brucegust@BRUCEGUST59AC MINGW64 /c/users/brucegust/projects/starter-web (master)
<u>$ git diff -- index.html</u>
diff --git a/index.html b/index.html
index 01f983f..8bc84e3 100644
--- a/index.html
+++ b/index.html
@@ -76,7 +76,7 @@
         &lt;div class="col-md-4"&gt;
           &lt;h2&gt;Heading&lt;/h2&gt;
           &lt;p&gt;Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, eges                                  tas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, t                                  ellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa just                                  o sit amet risus.&lt;/p&gt;
-          <span class="red">&lt;p&gt;&lt;a class="btn btn-default" href="#" role="button"&gt;View details &ra                                  quo;&lt;/a&gt;&lt;/p&gt;</span>
<span class="green">+          &lt;p&gt;&lt;a class="btn btn-default" href="#" role="button"&gt;View details and                                   more &raquo;&lt;/a&gt;&lt;/p&gt;</span>
         &lt;/div&gt;
       &lt;/div&gt;
</div>

What's underlined is the actual command. <span class="blue">git diff -- index.html</span>

BOOM!

<span class="tab_once"><a name="between_commits" class="contents">D) Comparing Between Commits</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="git_log" class="contents">1) GIT Log</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You can compare the content / status of your branch between two COMMITS.  Start by printing out a log of all of your GIT activity like this:

<span class="blue">git log --oneline</span>

That will give you something like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/users/brucegust/projects/starter-web (master)
$ git log --oneline
<span class="yellow">4ec1615 (HEAD -> master, origin/master, origin/HEAD) adding README.md file</span>
01b10fd changed .gitignore to include all files in log directory
8f96069 adding the wildcard log dynamic to the gitignore file
e8e5869 adding gitignore file
61d53ac deleting level1 directory
4ca54a5 deleting a file
adef97d moved file back to its original location
9cb1149 renamed the file
<span class="yellow">7a98855 Adding several files recursively!</span>
e478fc2 more ipsum for hipsters
36023a8 Adding more ipsum text
149f1c2 Adding more ipsum text
8026ff7 My first commit
4beb7f0 Merge pull request #6 from jasongtaylor/feature-readme
e73f914 Adding Purpose section to README
34f563b Adding README file
5c05047 Copying files from initializr project zip file and then creating simple.html as basis for super simple pages
</div>

<div style="border:1px solid #cccccc; border-radius:10pt; width: 350px; height:auto; margin:10px; padding:10px; float:right; box-shadow:10px 10px 5px #cccccc; font-size:10pt;">This website is a great resource for GIT and has a number of visual illustrations: <a href="http://marklodato.github.io/visual-git-guide/index-en.html" target="_blank">http://marklodato.github.io/visual-git-guide/index-en.html</a></div>Notice the top entry marked HEAD. HEAD refers to the "top" of your current BRANCH. This is the most recent change.

<span class="tab_twice"><a name="between_recent" class="contents">2) One Commit w/ the Most Recent</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To see those changes in a way that compares all of the COMMIITS with the top branch, you can use this command:

<span class="blue">git diff 7a98855 HEAD</span>

You get this:

<div class="git_box">diff --git a/.gitignore b/.gitignore
new file mode 100644
index 0000000..fdfdba1
--- /dev/null
+++ b/.gitignore
@@ -0,0 +1 @@
+log/
\ No newline at end of file
diff --git a/README.md b/README.md
index 06bb023..f82a519 100644
--- a/README.md
+++ b/README.md
@@ -4,4 +4,8 @@ This repository is for showing how Git and GitHub work

 ## Purpose

<span class="red">-Sample website with plenty of files for demos</span>
\ No newline at end of file
<span class="green">+Sample website with plenty of files for demos
+
+## What is ".md"
+
+"md" stands for "mark down" and is a glorified text file</span>
:</div>

There's a lot of information here that deals with the kind of file that's being evaluated. You can click <a href="https://stackoverflow.com/questions/2529441/how-to-read-the-output-from-git-diff" target="_blank">here</a> for more information, but the one thing that I found after the fact is that <span class="blue">index 06bb023..f82a519 100644</span> is not the id of the GIT activity. Rather it's referring to the kind of file that it is. For example, the "100644" code means that, "...means that it is ordinary file and not e.g. symlink, and that it doesn't have executable permission bit."

As an aside, you can compare the most recent commit with the second to last commit using this code:

<span class="blue">git diff HEAD HEAD^</span>

The "^" character is an upperclass 6.

When you do that, you get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/users/brucegust/projects/starter-web (master)
$ git diff HEAD HEAD^
diff --git a/README.md b/README.md
index f82a519..06bb023 100644
--- a/README.md
+++ b/README.md
@@ -4,8 +4,4 @@ This repository is for showing how Git and GitHub work

 ## Purpose

-Sample website with plenty of files for demos
-
-## What is ".md"
-
-"md" stands for "mark down" and is a glorified text file
\ No newline at end of file
+Sample website with plenty of files for demos
\ No newline at end of file</div>

It's a little difficult to sort through all of the hieroglyphics and pinpoint exactly what's changed. A better way to what's happened is to use the "difftool."

When you use:

<span class="blue">git difftool HEAD HEAD^</span>

...you get this screen:

<div style="width:auto; margin:auto; text-align:center;"><a href="images/difftool_commit.png" target="_blank"><img src="images/difftool_commit.png" border="0"></a></div>

What's on the left is what constitutes the most recent file. What's on the right is what you had just before the most recent commit.

<div class="conclusion" style="text-align:center;">BTW: To get out of "difftool" without having to start all over again, use <span class="blue">:qa</span> BAM!</div>
<span class="tab_twice"><a name="between_recent" class="contents">3) Two Specific Commits</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You can also compare two specific commits with one another. You would go back to your log to select the commit IDs with the one you want displayed first (usually the most recent) being documented first and then the one that's a little bit older.

<span class="blue">git diff 01b10fd 4beb7f0</span>

BTW: If you see <span class="blue">/dev/null</span>, that means the file in question didn't exist before the last commit. You can also use the "difftool" to see things displayed more visually.

<span class="tab_once"><a name="between_local_remote" class="contents">E) Comparing Between Local and Remote Master Branches</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

When you want to compare the "master" branch on your local box with the "master" branch in your "origin / master" branch in your repositiory, you do this:

<span class="blue">git difftool master origin/master</span>

There you have it! BTW: You need to have a repository in GitHub in order for this to work.

<span class="tab_once"><a name="between_cleanup" class="contents">F) Comparing Section Cleanup and Push Back to Github</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Add everything to the index which will put everything into the staging area with <span class="blue">git add .</span>

Now commit everything. Go out to GitHub and take a look at what it looks like. Notice how you can see every file that's been affected in that the comment that you made to go along with the commit is documented to the right of every file. 

<div style="width:auto; margin:auto; text-align:center;"><a href="images/cleaning.png" target="_blank"><img src="images/cleaning.png" border="0"></a></div>

<div class="title">&nbsp;<a name="branching_merging" style="color:#ffffff;">XXI) Branching and Merging</a></div>

<span class="tab_once"><a name="branching_basics" class="contents">A) Branching Basics</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a href="#branching_list" class="contents">1) List All Branches</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To list your branches, you'll use <span class="blue">git branch -a</span>

<span class="tab_twice"><a href="#branching_create" class="contents">2) Create a Branch</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To create a branch, you'll do this: <span class="blue">get branch mynewbranchname</span>

<span class="tab_twice"><a href="#branching_rename" class="contents">3) Rename a Branch</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To rename it, you'll use <span class="blue">git branch -m mynewbranchname mynewbranch</span>. "m" is for "move."

<span class="tab_twice"><a href="#branching_rename" class="contents">4) Delete a Branch</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To delete a branch, you'll just use <span class="blue">git branch -d mynewbranch</span>

<div class="title">&nbsp;<a name="reset" style="color:#ffffff;">XXII) Bonus: Touch and Hard Reset</a></div>

<span class="tab_once"><a name="touch" class="contents">A) Touch</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

"Touch" gives you the ability to create a new document through GIT. It will be an empty document, but it will be a file nevertheless. Like this:

<span class="blue">git touch michelle.txt</span>

At this point, all you have is a blank file. To add any content, you've got to physically add that material.

<span class="tab_once"><a name="just_one" class="contents">B) Physically Removing Just One File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

If you want to remove just one file, you would do it like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/users/brucegust/projects/starter-web (touch_puppy)
$ git rm -f simple.html
rm 'simple.html'</div>

The "-f" means "force." In this example, some changes have been made to the "simple.html" file. GIT will ask if you want to get rid of it despite the fact that you were working on it just a moment ago. Answer, "y" and the file will be deleted. Click <a href="https://www.atlassian.com/git/tutorials/undoing-changes/git-rm" target="_blank">here</a> for more info.

<span class="tab_once"><a name="just_one_stage" class="contents">C) Removing a File From the Staging Area</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

If you want to simply remove a file from the working directory, you would do this:

<div class="git_box"><span class="green">brucegust@BRUCEGUST59AC</span> <span style="color:magenta;">MINGW64</span> <span style="color:yellow;">/c/users/brucegust/projects/starter-web</span> <span style="color:aqua;">(touch_puppy)</span>
$ git status
On branch touch_puppy
Changes not staged for commit:
  (use "git add/rm &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

        <?php echo $white_one;?><span class="red">deleted:    simple.html</span>

Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)

        <span class="red">vivian.txt</span>

no changes added to commit (use "git add" and/or "git commit -a")

<span class="green">brucegust@BRUCEGUST59AC</span> <span style="color:magenta;">MINGW64</span> <span style="color:yellow;">/c/users/brucegust/projects/starter-web</span> <span style="color:aqua;">(touch_puppy)</span>
<?php echo $white_two;?>$ git checkout simple.html</div>

<?php echo $white_one;?> here's a file that has yet to be "added." You want it off of GIT's radar so it's not registering as a change that needs to be added or committed. To do that you're going to use...

<?php echo $white_two;?><span class="blue">$git checkout simple.html</span> - with this command, you're unstaging the changes that have been made and, by so doing, not only are you changing the way GIT sees things, you're also undoing whatever changes you made to the file.

<span class="tab_once"><a name="just_one_add" class="contents">D) Removing a File That's Been Added</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

So, you've made a change to "vivian.txt" and you've added it. By "adding" it's kind of like staging a picture. You're putting all of your peeps in place and asking them to smile. You haven't clicked the shutter yet, but you now have everything staged.

<span class="tab_once"><a name="rid_commit" class="contents">D) Getting Rid of a File That's Been Committed</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's your scenario:

You've got a text file named "vivian.txt." You make a change and you add it. If you do a <span class="blue">git log --oneline</span>, you get this:

<div class="git_box">$ git log --oneline
c2027a9 (HEAD -> touch_puppy) committing vivian
414f19e made a quick change
1e3a26c Changing Title
349dc2e delete vivian file
65f531d committing carter
716aabe get rid of carter.txt
972debe let it go
be97fb7 my son
ab45165 my pretty daughter
21bed91 deleted carter
b9fb29a now my bride
d71aa6f just my son
1eb32e4 added michelled
a434383 adding michelle.txt
1de6f22 (origin/master, origin/HEAD) cleaning everything up
4ec1615 adding README.md file
01b10fd changed .gitignore to include all files in log directory
8f96069 adding the wildcard log dynamic to the gitignore file
e8e5869 adding gitignore file
61d53ac deleting level1 directory
4ca54a5 deleting a file
adef97d moved file back to its original location
9cb1149 renamed the file</div>

If you do <span class="blue">git reflog</span>, you get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/users/brucegust/projects/starter-web (touch_puppy)
$ git reflog
c2027a9 (HEAD -> touch_puppy) HEAD@{0}: commit: committing vivian
414f19e HEAD@{1}: reset: moving to HEAD@{9}
38a4ad8 (master) HEAD@{2}: reset: moving to HEAD@{6}
38a4ad8 (master) HEAD@{3}: reset: moving to HEAD@{3}
20c4f8f HEAD@{4}: reset: moving to HEAD
20c4f8f HEAD@{5}: commit: commit vivian
349dc2e HEAD@{6}: checkout: moving from master to touch_puppy
38a4ad8 (master) HEAD@{7}: merge title-change: Fast-forward
1e3a26c HEAD@{8}: checkout: moving from title-change to master
38a4ad8 (master) HEAD@{9}: commit: bring it
3fbbdd9 HEAD@{10}: commit: one quick change
414f19e HEAD@{11}: commit: made a quick change
1e3a26c HEAD@{12}: checkout: moving from master to title-change
1e3a26c HEAD@{13}: merge title-change: Fast-forward
1de6f22 (origin/master, origin/HEAD) HEAD@{14}: checkout: moving from title-change to master
1e3a26c HEAD@{15}: commit: Changing Title
349dc2e HEAD@{16}: checkout: moving from touch_puppy to title-change
349dc2e HEAD@{17}: commit: delete vivian file
65f531d HEAD@{18}: reset: moving to HEAD
65f531d HEAD@{19}: reset: moving to HEAD
65f531d HEAD@{20}: reset: moving to HEAD
65f531d HEAD@{21}: commit: committing carter</div>

With <span class="blue">git reflog</span>, you're getting the reference # for every commit. So, now if you want to roll things back in a way that goes back to a specific commit, you would do this:

<span class=

<span class="tab_once"><a name="hard_reset" class="contents">E) Hard Reset</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

A Hard Reset looks like this:<ul><li>1) you commit a change</li><li>2) you do another change, but you don't commit it</li><li>3) you do <span class="blue">git reset --hard</span></li><li>4) GIT takes you back to your previous commit which means you lost all the work you did on step #2</li></ul>It's a great fix when you want to roll all your stuff back to a previous stage, but be careful because it can be very unforgiving!

<div class="title">&nbsp;<a name="one_command" style="color:#ffffff;">XXIII) One Command -> Create and Checkout Branch | Fast Forward Merge</a></div>

<span class="tab_once"><a name="one_fell_swoop" class="contents">A) Create and Checkout a New Branch With One Command</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To create a new branch and check it out with one command, do this:

<span class="blue">$ git checkout -b title-change</span>

When you do that, you'll get this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/users/brucegust/projects/starter-web (touch_puppy)
$ git checkout -b title-change
Switched to a new branch 'title-change'</div>

You were on the "touch_pupppy" branch and then you're on the brand new branch "title-change" that you just created.

<span class="tab_once"><a name="fast_merge" class="contents">B) Fast Foward Merge</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

A "fast merge" is where you don't have any changes to your "master" branch save the branch you're getting ready to merge at present. It's not something you're going to necessarily specify, but it will show up on "git" when you do the merge. Like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/users/brucegust/projects/starter-web (master)
$ git merge title-change
Updating 1de6f22..1e3a26c
<span class="highlight" style="color:#000;">Fast-forward</span>
 carter.txt  | 1 +
 simple.html | 2 +-
 2 files changed, 2 insertions(+), 1 deletion(-)
 create mode 100644 carter.txt</div>
 
 After you've merged your changes from "title-change" to "master," you can delete the "title-change" branch with <span class="blue">git branch -d &lt;branch to be deleted&gt;-> delete a branch</span>.
 
 Again, what we just did is not at all atypical. It's what you generally do anytime you're working on a project <i>by yourself</i>. Anytime your "master" is devoid of any changes save the ones you're getting ready to merge, you're going to have a "fast forward" dynamic.
 
 <span class="tab_once"><a name="disable_fast_merge" class="contents">C) Disable Fast Merge</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
 
 Check this out...
 
 Say, you make some changes on a branch. You merge those changes into your "master" branch and because there isn't any other activity on the "master" branch, you're doing a "fast forward."
 
 Right?
 
 OK, but suppose you want to maintain your new branch despite the fact that's a duplicate of your "master?"
 
 To do that, you would go back to your "master" branch and type this command:
 
 <span class="blue">git merge &lt;:name of branch &gt; --no-ff</span>
 
 This preserves the substance of your branch which you'll see in the log below:
 
 <div style="width:700px; margin:auto; text-align:center;"><a href="images/no_ff.png" target="_blank"><img src="images/no_ff.png" border="0" style="width:700px; border:1px solid #ccc;"></a></div>
 
 You'll notice how the log depicts the fact that you're branch which would've normally been documented as a regular "fast forward" is now being documented differently in light of the fact that we've disabled the "ff" dynamic.
 
  <span class="tab_once"><a name="auto_merge" class="contents">D) Automatic Merges</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
  
  There's really not a whole lot to this segment.
  
  Bottom line: You create and checkout a branch in one fell swoop with:
  
  <div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master) git checkout -b simple-changes</div>
  
  Just like that, you've created a new branch and you're sitting on it presently.
  
  Make a change and then do an "add" and "commit" with one command using this:
  
  <div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master) git commit -am "git commit message"</div>
  
  BOOM! 
  
  At this point, you've created a branch, edited a file and committed your changes to that branch.
  
  Imagine now you want to go back to your "master" branch and you make some changes to your "ReadMe.md" file. Technically, you've got two changes that are being made to the "master" branch once you go to merge your "simple-changes" branch to the "master." 
  
  Perhaps there's a possibility that "simple-changes" will overwrite what you've just done on the "master" branch?
  
  No!
  
  GIT will preserve what you've done on "master" while simultaneously bringing in your "simple-changes" edits.
  
  Here is that command:
  
  <div class="git_box">git merge simple-changes -m "Merging happy-dog branch"</div>
  
  Merge the branch you created a moment ago (I changed the name to "happy-dog"), then do a "git log" and you'll see a graphic representation of the changes that you've made:
  
<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master)
$ git log --oneline --graph
* 65afea2 (HEAD -> master) changed ReadMe.md file
*   caf1995 Merge branch 'happy-dog'
|\
| * 6d71b97 (happy-dog) quick changes to text
|/</div>

Here you can see how some changes were made to the "master" while simiultaneously bringing the changes from "happy-dog."

  <span class="tab_once"><a name="conflicting_puppies" class="contents">E) Conflicting Merges and Resolution</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
  
  Here's the dilemma: Two people are working on the same file. They got to merge things and GIT spits out an error. 
  
  For example, I've got a new branch called "realwork." I do so edits on "simple.html." I then go to the "master" branch and I work on the same file. When I do <span class="blue">git diff master realwork</span>, I get this:
  
<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master)
$ git diff master realwork
diff --git a/simple.html b/simple.html
index d3b26c8..6f9a80d 100644
--- a/simple.html
+++ b/simple.html
@@ -3,7 +3,7 @@
        Copyright 2019
 --&gt;
 &lt;head&gt;
-       <span class="red">&lt;title&gt;What's Up, Sweetheart?&lt;/title&gt;</span>
+       <span class="green">&lt;title&gt;What's Up, Doc?&lt;/title&gt;</span>
        &lt;link rel="stylesheet" href="css/bootstrap.min.css"&gt;
        &lt;style&gt;
                body {
@@ -23,7 +23,7 @@
                &lt;/p&gt;
        &lt;/main&gt;
        &lt;footer class="container"&gt;
-               <span class="red">&lt;p&gt;&copy; Company 2019&lt;/p&gt;</span>
+               <span class="green">&lt;p&gt;&copy; Company 2014&lt;/p&gt;</span>
        &lt;/footer&gt;
 &lt;/body&gt;
 &lt;/html&gt;</div>
 
 What's in <span class="red">red</span> is your "master" branch. What's in <span class="green">green</span> is what's in the "realwork" branch. Notice how the two branches are attempting to alter the same line of code.
 
 <div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master)
$ git merge realwork
Auto-merging simple.html
<span class="highlight" style="color:#000;">CONFLICT (content): Merge conflict in simple.html</span>
Automatic merge failed; fix conflicts and then commit the result.</div>

To fix this, you'll do <span class="blue">notepad++ simple.html</span>. At that point, "notepad++" will open up and you'll get this:

<?php echo $code_frame;?>&lt;!DOCTYPE html&gt;
&lt;!--
	Copyright 2019
--&gt;
&lt;head&gt;
&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD
	&lt;title&gt;What's Up, Sweetheart?&lt;/title&gt;
=======
	&lt;title&gt;What's Up, Doc?&lt;/title&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; realwork
	&lt;link rel="stylesheet" href="css/bootstrap.min.css"&gt;
	&lt;style&gt;
		body {
			padding-top: 50px;
			padding-bottom: 20px;
		}
	&lt;/style&gt;
	&lt;link rel="stylesheet" href="css/bootstrap-theme.min.css"&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;main class="container"&gt;
	&lt;!-- Content Goes Here --&gt;
		&lt;p&gt;
			Just some content to look at again! And would believe we're going to do something again! And once more!
			&lt;br&gt;&lt;br&gt;
			And again!
		&lt;/p&gt;
	&lt;/main&gt;
	&lt;footer class="container"&gt;
		&lt;p&gt;&copy; Company 2019&lt;/p&gt;
	&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</div></div>

Notice how things are broken up...

<span class="red">&lt;head&gt;
&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD
	&lt;title&gt;What's Up, Sweetheart?&lt;/title&gt;</span>
=======
	<span class="green">&lt;title&gt;What's Up, Doc?&lt;/title&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; realwork</span>

The stuff that's in red is your "master" branch, the stuff that's in green is your "realwork" branch. To clean this up, you would choose which section you want to remain as the "newest and coolest" and eliminate everything else. That said, here's what the corrected file would look like if you wanted to stay with the "realwork" branch...

<span class="green">&lt;head&gt;
	&lt;title&gt;What's Up, Doc?&lt;/title&gt;</span>
	
And then when you go back to merge, you'll see a new "untracked" file, "simple.html.orig." That's a file that has all of what you just deleted in the event that you needed to backtrack...

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master|MERGING)
$ git commit -am realwork
[master 99e2311] realwork

brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 26 commits.
  (use "git push" to publish your local commits)

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        <span class="red">simple.html.orig</span>

nothing added to commit but untracked files present (use "git add" to track)

brucegust@BRUCEGUST59AC MINGW64 /C/Users/brucegust/projects/starter-web (master)</div>

You'll want to ignore that file. To do that, you would add that to your "gitignore" file like this:<ul><li>go to your ".gitignore" file by typing <span class="blue">notepad++ .gitignore</span > and then once that file is open, do this:</li></ul><span class="blue">log/
<span class="highlight">*.orig</span></span>

The "*.orig" piece is telling the system to ignore all files with the extension ".orig."

Now when you do a "git status," the only thing that registers as someting that's been modified is the ".gitignore" file.

Here's what you "git log" looks like:


<div class="git_box">* 4f58f9a (HEAD -> master) updated .gitignore file to include the sample.html.orig file
*   99e2311 realwork
|\
| * e4db3ac (realwork) making changes to simple.html
* | 00262f3 Making changes that I know are going to conflict
|/
*   4729845 Merging changes from add-copyright
|\
| * df5e891 made some incremental changes to simple.html and README.md
* |   58ad553 Merging changes from simple-0changes
|\ \
| * | 26009e8 changing my info
* | | 65afea2 changed ReadMe.md file
|/ /
* |   caf1995 Merge branch 'happy-dog'
|\ \
| * | 6d71b97 quick changes to text
|/ /
* | af93118 editing simple.html
|/
* 38a4ad8 bring it
* 3fbbdd9 one quick change</div>

<span class="tab_twice"><a name="conflicting_resolution" class="contents">1) Cleanup</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To keep everything up to date with what's in Github, you'll first want to make sure you do an inventory of your branches and perhaps delete what you don't want. 

The command to delete a branch is <span class="blue">git branch -d &lt;branch name&gt;</span>

Sometimes you'll run into a situation where a branch has some unmerged changes that are no longer relevant and GIT will make you pause before you attempt to delete it. When you want to force delete a branch, you'll do this:

<span class="blue">git branch -D &lt;branch name&gt;</span>

Now to get everything up to speed with your PROD repository, you'll first do a "pull" so you know what you're getting ready to upload is up to speed with everything else...

<span class="blue">git pull origin master</span>

Once that's done, you'll then push your master branch up to PROD like this:

<span class="blue">git push origin master</span>

...and that will do it!

<div class="title">&nbsp;<a name="rebasing" style="color:#ffffff;">XXIV) Rebasing</a></div>

Bringing changes from your master branch to a recently changed branch and combining things so everybody's up to speed.

Here's the way this works:

<span class="tab_once"><a name="rebasing_example" class="contents">A) Simple Rebasing Example</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

First, you're going to make a change to your "humans.txt" file while on your "myfeature" branch...

<div class="git_box"><span class="green">brucegust@BRUCEGUST59AC</span> <span class="red">MINGW64</span> <span class="yellow">/c/wamp/www/starter-web</span> <span class="blue">(myfeature)</span>
$ git commit -am "saying thanks to all my students" <span class="green">// express command used to add an commit changes to document in "my feature" branch</span>
[myfeature b451615] saying thanks to all my students
 1 file changed, 1 insertion(+), 1 deletion(-)
</div>

Now, you're going to checkout your "master" branch and make some changes there...

<div class="git_box"><span class="green">brucegust@BRUCEGUST59AC</span> <span class="red">MINGW64</span> <span class="yellow">/c/wamp/www/starter-web</span> <span class="blue">(master)</span>
$ git commit -am "edited a line"
[master 0f4a961] edited a line
 1 file changed, 1 insertion(+), 1 deletion(-)
</div>

At this point, your "master" branch is different from your "myfeature" branch. What "rebase" is going to do is reconstruct what amounts to the basis or the "base" of your "myfeature" branch. 

The tutorial uses the illustration of "rewinding," but the "re-basing" illustration works for me. 

You're on, "myfeature" and you do this command:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/wamp/www/starter-web (myfeature)
$ git rebase master
First, rewinding head to replay your work on top of it...
Applying: saying thanks to all my students</div>

Now everything is as it should be!

Basically, what you have two files that have been changed on both the master branch and another branch. There's nothing that conflicts. By that I mean that you can merge the two collections of changes into one beautiful "whole" and no one has worked on the same line of code / stepped on each other's toes. 

In effect, you're merging the two branches just like you would normally, the difference being that you're changing your "myfeature" branch so that it's starting point - it's "base" - includes the changes that were made on "master." You're "re-basing" your "myfeature" branch.

When you "rebase," you're merging the changes from another branch made on a particular file to your master branch and re-establishing your master branch according to both sets of changes. 

<span class="tab_once"><a name="rebasing_conflict" class="contents">B) Setup for Rebasing Conflict</a></span> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You're going to make a change to "simple.html" and then run this command...

<div class="git_box">git commit -am "mb before rebase conflicts"</div>

BTW: git commit - am -> git commit -a automatically stage all tracked, modified files before the commit If you think the git add stage of the workflow is too cumbersome, Git allows you to skip that part with the -a option. This basically tells Git to run git add on any file that is "tracked" - that is, any file that was in your last commit and has been modified. This allows you to do a more Subversion style workflow if you want, simply editing files and then running git commit -a when you want to snapshot everything that has been changed. You still need to run git add to start tracking new files, though, just like Subversion.

Using the option -am allows you to add and create a message for the commit in one command.
<ul><li>we're going to create a new branch and make a change to "simple.html"</li><li>we're going to go back to the master branch and make additional changes to the same file</li><li>we're going to view the way this looks on the git log by typing <span class="blue">git log --oneline --graph --decorate</span>. It looks like this:

<div class="git_box">brucegust@BRUCEGUST59AC MINGW64 /c/wamp/www/starter-web (master)
$ git log --oneline --graph --decorate --all
<span class="highlight" style="color:#000;">* 3b9fc92 (HEAD -> master) conflicting changes I think
| * 33bca32 (bigTrouble) adding some toxic changes
|/</span>
* c141892 changes before rebase conflicts
* d7ff35b (myfeature) adding another change
* ce46eba saying thanks to all my students
* 0f4a961 edited a line
* 4f58f9a (origin/master, origin/HEAD) updated .gitignore file to include the sample.html.orig file
*   99e2311 realwork
|\
| * e4db3ac making changes to simple.html
* | 00262f3 Making changes that I know are going to conflict
|/
*   4729845 Merging changes from add-copyright
|\
| * df5e891 made some incremental changes to simple.html and README.md</div>

When you're on the master branch and you run <span class="blue">git rebase</span>, the above graph changes and instead of seeing the deviation represented by the highlighted section, it becomes one syncronous progression.

Remember, to exit out of the "diff" tool, just type ":q"

<span class="tab_once"><a name="rebasing_abort" class="contents">C) Abort Rebase</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

BTW: Here's what a genuine conflict looks like using p4Merge:

 <div style="width:700px; margin:auto; text-align:center;"><a href="images/conflict.png" target="_blank"><img src="images/conflict.png" border="0" style="width:700px; border:1px solid #ccc;"></a></div> 
 It's the part in green that you need to be looking at. You've got two different versions, yes, but what's problematic about this is that you've got the same file having been altered ON THE SAME LINE. In that respect, the two files can't be combined without one set of changes being overwritten by another. That's what a "conflict" is.
 
 So, if I want to try and rebase my "bigtrouble" branch, I'm going to get an error:
 
 <div class="git_box">b.gust@AHA-DT-BGUST2 MINGW64 /c/wamp64/www/adm/git/starter-web (bigtrouble)
$ git rebase master
First, rewinding head to replay your work on top of it...
Applying: added some additional text to simple.html
Using index info to reconstruct a base tree...
M       simple.html
Falling back to patching base and 3-way merge...
Auto-merging simple.html
CONFLICT (content): Merge conflict in simple.html
error: Failed to merge in the changes.
hint: Use 'git am --show-current-patch' to see the failed patch
Patch failed at 0001 added some additional text to simple.html
Resolve all conflicts manually, mark them as resolved with
"git add/rm <conflicted_files>", then run "git rebase --continue".
You can instead skip this commit: run "git rebase --skip".
To abort and get back to the state before "git rebase", run "git rebase --abort".</div>

To abort a rebase command, just type <span class="blue">git rebase --abort</span>.

Quick notes: To list all of the branches that are on your remote repository, <span class="blue">git branch --remote</span>

Good page to refer to when you're looking to download or initiate code that's going to have a home on Github...<a href="https://gist.github.com/pernomian/3083873" target="_blank">https://gist.github.com/pernomian/3083873</a>

<span class="tab_once"><a name="rebasing_resolution" class="contents">D) Rebasing Conflict &amp; Resolution</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You're going to use this command to open up your difftool so you can see and repair the conflicts:

<span class="blue">git mergetool</span>

At that point, you'll get a screen that looks like this:

<div style="width:700px; margin:auto; text-align:center;"><a href="images/resolution.png" target="_blank"><img src="images/resolution.png" border="0" style="width:700px; border:1px solid #ccc;"></a></div>
Notice the arrows! The arrow in the lower right hand corner is where you can toggle back and forth between the two options, as far as what changes you want to accept and which ones you want to discard.

When you've made your choices, you can simply click on the "save" button in the upper left hand corner. 

<div class="conclusion">One thing that I had to do: There was conflict that I had to resolve by manually inserting some text. It seems like both files had <span>&lt;br&gt;&lt;br&gt;</span> and I couldn't get one file to override the other. I went in and manually entered the characters on one particular file and that did the trick.</div>

<span class="tab_once"><a name="rebasing_pull" class="contents">E) Pull With Rebase</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's the scenario:

Your remote repository - your origin master - has changed. You want to pull those changes without disrupting the changes you've made on your branch. 

You can do that by rebasing your current branch and you do that like this:

<div class="git_box">b.gust@AHA-DT-BGUST2 MINGW64 /c/wamp64/www/adm/git/starter-web (master)
<span class="highlight" style="color:#000;">$ git pull --rebase origin master</span>
From https://github.com/brucegust/starter-web
 * branch            master     -> FETCH_HEAD
First, rewinding head to replay your work on top of it...
Applying: making some copyright changes</div>

<span class="tab_twice"><a name="fecth_pull" class="contents">1) Fetch versus Pull</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Suppose someone has created a new branch called, "contact." If you want access to that branch, you have to do a "fetch."

At that point, you now have a copy of the "contact" branch on your box and you can "push" and "pull" to your heart's content.

That's the difference between "pull" and "fetch." "Pull" presupposes a relationship between the branch you have on your box and that same branch as it exists in your remote repository. If you don't have that relationship, you have to "fetch" it in order to establsh that line of communication.

Another thing to keep in mind is that a "pull" facilitates a "fetch" and a "merge" simultaneously.

<div class="title">&nbsp;<a name="stashing" style="color:#ffffff;">XXV) Stashing</a></div>

<span class="tab_once"><a name="stash_example" class="contents">A) Simple Example</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

"Stashing" is just a quick and easy way to save your changes without having to create a new branch. It's a great little tool if you're working on something then have to turn your attention to something else. This option gives you the chance to store your work without having to add, create, push, etc.

Here's a basic example.

You make some changes to a file. You decide you need to work on something else, but don't want to lose the work you've just completed. You use this command:

<span class="blue">git stash</span>

What you've done has been saved, although if you were go out to the file you were just working on, you wouldn't see the work you just did. That's OK, though!

Imagine that you go off and do some other work. Now, you're coming back and you want to retrieve the work that you had done. To retrieve that work, you do this:

<span class="blue">git stash apply</span>

Now, when you go back to the file you were working on, you see all of the work that you had accomplished.

You finish your work and commit it. You do want to eliminate the "stashes" that you put in place. To see them, you do this:

<span class="blue">git stash list</span>

That will give you this:

<div class="git_box">b.gust@AHA-DT-BGUST2 MINGW64 /c/wamp64/www/adm/git/starter-web (master)
<?php echo $white_one;?>$ git stash list
<?php echo $white_two;?>stash@{0}: WIP on master: 075ab45 making some copyright changes

b.gust@AHA-DT-BGUST2 MINGW64 /c/wamp64/www/adm/git/starter-web (master)
<?php echo $white_three;?>$ git stash drop
Dropped refs/stash@{0} (8a9d7e25525bd9e5217c218597d8fec8fdd2d7d3)</div>

<?php echo $one;?> here's what you're using to get your "stash" list
<?php echo $two;?> "WIP" means "work in progress." 
<?php echo $three;?> this is the command you use eliminate your "stashes"

Delete a branch "git branch -d &lt;branch name &gt;" (<a href="https://www.freecodecamp.org/news/how-to-delete-a-git-branch-both-locally-and-remotely/" target="_blank">https://www.freecodecamp.org/news/how-to-delete-a-git-branch-both-locally-and-remotely/</a>)

Add a new branch and check it out at the same time: git checkout -b bruce-activity-stream

If you do a "add .," you're staging everything that has yet to be committed, including some untracked files which may be irrelevant. If you need to undo an "add .," just do "git reset."

If your "gitignore" file doesn't include some pesky files that you don't want to stage, you can "add" only your modified files by doing "git add -u"

<div class="title">&nbsp;<a name="practical" style="color:#ffffff;">Practical Application</a></div>

<div class="textbox">This situation was an established Repository and you were assigned a branch. You copy that branch as an empty repository on to your Desktop.</div>IQuick rundown of some basic commands in the context of a real life scenario.
  
  In this instance, I had created an authentication script that needed to be uploaded to a new branch on an existing repository...
 
 <span class="tab_once"><a name="setup_repository" class="contents">A) Set Up Repository</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
 
In order to get the GIT dynamic in place, you're going to want to establish your Remote Repository. So that means you're going out to GitHub, setting up your branch and then cloning that empty repository to your Desktop.

It's going to be:

<span class="blue">git clone &lt;repository URL&gt;</span>

<span class="tab_once"><a name="setup_add" class="contents">B) New Branch / Add All</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You've got an empty folder, but that empty folder is your "origin master" in terms of what's going on with your Desktop. So, as a matter of "best practice," you want to set up a new branch and check it out in one fell swoop. To do that, you're going to use:

<span class="blue"> git checkout -b new_env</span>

"new_env" is the name of your new branch and with the above command you're creating it and checking it out at the same time.

Once that branch is created, in this instance - since all my files were already created - I copied and pasted them into my directory which is being recognized by GIT as the "new_env" branch.

The "status" of my branch is now going to have all of these new files documented in red as "untracked files." To add them, you'll do this:

<span class="blue">git add .</span>

That "." character adds all of the files without having to add them individually.

<span class="tab_once"><a name="setup_commit" class="contents">C) Commit Changes and Merge Them Into "master"</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Now, you're going to checkout your "master" branch and merge the changes you made in "new_env" to your "master" branch.

<span class="blue">git merge new_env</span>

At this point, you've got all your new files from your "new_env" branch in your "master" branch. One more thing...

<span class="tab_once"><a name="setup_push" class="contents">D) Push Them Into origin master</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Last thing: You're on your "master" branch and you're going to push this up to your remote repository...

<span class="blue">git push origin master</span>

And that's it!

<span class="tab_once"><a name="prac_origin" class="contents">E) Push to Your Remote Repository</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To push the changes you've made to your local branch up to your remote repository, you'll do this:

<span class="blue">git push origin &lt;your branch name &gt;</span>

<span class="tab_once"><a name="prac_reset" class="contents">F) Reset Your Base Branch to What's on Your Remote Repository</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You do a "git status" and find that you've got some files that are ahead of your ORIGIN. Thing is, you don't want those edited files to be a part of the mix you send up to your ORIGIN anyway. So, how do you get them off of the git screen? 

What you're going to do is "fetch" the files from ORIGIN that you want to replace the file that's needed to be reset. Here's how that looks:

For one file:

<span class="blue">git fetch
git checkout origin/master &lt;filepath&gt;</span>

If you want to overwrite all changed files:

<span class="blue">git fetch
git reset --hard origin/master</span>

<span class="tab_once"><a name="prac_reset" class="contents">G) Unstage Unwanted Files</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

To unstage any changes that you made - in other words, you've made changes but you don't want them to be saved let alone sent up the line to your remote repository, here's how you "unstage" them:

<div style="width:807px; margin:auto; text-align:center;"><a href="images/reset.png" target="_blank"><img src="images/reset.png" border="0" style="width:807px; border:1px solid #ccc;"></a></div>

<span class="tab_once"><a name="prac_exit" class="contents">H) Exiting the Comment Section of the Command Line</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

When you do a "pull" from your remote repository, sometimes you'll be promtped to include a comment. When that happens, documenting the comment is easy. It's knowing how to get out of the editor dynamic that will trip you up. To do that just...

1) press "esc"
2) type <span class="blue">:wq</span>

<span class="tab_once"><a name="prac_force" class="contents">I) Force a Branch Checkout</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's the scenario: You've got some files that aren't really relevant to the work you've been doing. You try and switch to a different branch, but you're told that you don't have permission to change the files in question and you can't overwrite them.

You're stuck...

<div class="git_box">b.gust@AHA-DT-BGUST2 MINGW64 /c/wamp64/www/bsmart (code-cleanup)
$ git checkout final-activity-stream
error: The following untracked working tree files would be overwritten by checkout:
        .vs/VSWorkspaceState.json
        .vs/bsmart/v16/.suo
        .vs/slnx.sqlite
Please move or remove them before you switch branches.
Aborting</div>

So, you "force" a checkout and that looks like this:

git checkout -f final-activity-stream

<span class="tab_once"><a name="prac_tracked" class="contents">J) Prevent a File From Being Tracked</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's the scenario: You're running a Nodejs application and there are changes being made to some of your scripts that you don't want to track. 

You add them to your "gitignore" file. You "add" and "commit" that file, but the changes that have been made to those files are still in your index. In other words, they're still being processed by Git as a round of edits that need to be acknowledged one way or another.

Quick aside: Working Trees, Head and Index...

<div class="quote">Working trees: They are nothing but the files that you are currently working on.

HEAD: HEAD is a pointer to the branch or commit that you last checked out, and which will be the parent of a new commit if you make it. For example, if you're on the master branch, then HEAD will be pointing to master, and when you commit, that new commit will be a descendant of the revision that your master pointed to, and master will be updated to point to the new commit.

Index: The git "index" is where you place files you want commit to the git repository.The index is a staging area where the new commit is prepared. Essentially, the contents of the index are what will go into the new commit (though if you do git commit -a, this will automatically add all changes to files that Git knows about to the index before committing, so it will commit the current contents of your working tree). The command git add will add or update files from the working tree into your index.  (<a href="https://intellipaat.com/community/14325/whats-the-difference-between-head-working-tree-and-git-index-in-git" target="_blank">Intellipaat</a>)</div>

A couple of good tutorials / resources: <a href="https://www.atlassian.com/git/tutorials/undoing-changes/git-rm" target="_blank">Git Docs</a>,  <a href="https://superuser.com/questions/1397199/how-to-ignore-a-tracked-file-in-git-without-deleting-it" target="_blank">How to Ignore a File Without Deleting It</a>

<span class="tab_once"><a name="prac_pull" class="contents">K) Pull From Remote Repository</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

First of all the difference between "fetch" and "pull" is all about the way in which you're <u>tracking</u> your remote repository. 

When you do "pull," it's assumed you're tracking the activity that's happening on your remote location. When you do that, it's going to grab all of the  new stuff and automatically merge it into whatever you've got going on in your local branch.

When you do a "fetch," you're just grabbing the new content. Whatever represents the "newest and coolest" will have to merged manually.

<span class="tab_twice"><a href="#prac_track" class="contents">1) Track a Remote Branch</a></span>

However you want to retrieve the new content from your remote respository, you have to be "tracking" the branch as it exists on the remote server. 

As has already been stated, you can push your changes using: <span class="blue">git push origin &lt;your branch name&gt;</span>. To fetch or pull them, you have to be tracking them and you do that like this:

<span class="blue">$ git branch --set-upstream-to=origin/final-activity-stream</span>

Once that's in place, you're good to go!

<span class="tab_once"><a name="prac_reset" class="contents">L) Remove vs Reset</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="prac_rm" class="contents">1) Remove -> rm bin/start.sh (this is how you lose a file)</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here's the problem. You're trying to switch to a different branch and you're told that you can't because you have unsaved changes that are going to be overwritten, one them being "bin/start.sh" Somehow the file had either been altered or you simply couldn't change branches because of something that was still running. 

Here's what it looked like:

<div style="width:600px; margin:auto; text-align:center;"><a href="images/start.png" target="_blank"><img src="images/start.png" border="0" style="width:600px; border:1px solid #ccc;"></a></div>
So, you couldn't get off the current branch. You couldn't stash or ignore the "changes" that had apparently been made because of "permissions..."

It was a ball of snot. 

<div class="conclusion">Initially, I tried <span style="blue">git rm bin/start.sh</span>. Note to self: "<a href="https://git-scm.com/docs/git-rm" target="_blank">rm</a>" removes the file from your application and not just the Git index. If you want to unstage a file, you have to use a separate command.</div>
<span class="tab_twice"><a name="prac_running" class="contents">2) What Procecces are Running?</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

In the above scenario, turns out that "something was still running." However it obvious it should've been, the fact that Docker was still running thus using the file, wasn't apparent apart from the "<a href="https://docs.microsoft.com/en-us/sysinternals/downloads/process-explorer" target="_blank">Process Explorer</a>" which revealed the program that was still using that file. 

Good little program!

<span class="tab_twice"><a href="#prac_retrieve" class="contents">3) Retrieve a File</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Still, I've got a deleted file that I need to replace. And because it's a shell script, nothing was working in Notepad++. So, instead I grabbed what I knew to be a working version from another branch and installed that. 

That worked!

All you needed to do was <a href="https://xliska.wordpress.com/2010/09/22/copy-files-between-git-branches/" target="_blank">this</a>:

<div class="git_box">b.gust@AHA-DT-BGUST2 MINGW64 /c/wamp64/www/bsmart (final-activity-stream)
<span style="color:#82dcfa">$ git checkout final-activity-stream-copy bin/start.sh</span>
Updated 1 path from 239c9e3</div>
That got the file back in place and we were good to go!

<span class="tab_twice"><a name="prac_unstage" class="contents">2) Reset / Unstage</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You still have to "unstage" the "bin/start.sh" file. This is actually something that's already been covered. Click <a href="#prac_reset">here</a> to see how that's done.

<span class="tab_once"><a name="prac_denied" class="contents">M) error: unable to create file bin/start.sh: Permission denied</a>  <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This was annoying. Bottom line: The "bin/start.sh" file is still running somewhere in the background. You have to quit that process before you can switch branches without doing a <span class="blue">git checkout -f &lt;new branch &gt;</span>.

Or, if it doesn't matter just do a "force," but otherwise, from you command line you can run <span class="blue">killall node</span>.

<span class="tab_once"><a name="prac_conflicts" class="contents">N) Resolving Conflicts</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This piece is pretty substantial in that you're reviewing how to use the P4 Merge Tool. In addition, to get to that point, you're creating a new project on Github that already exists on your local box, intentionally creating conflicts and then using the Merge Tool to resolve those conflicts and merge them into your Master branch. 

Buckle up!

<span class="tab_twice"><a name="prac_init" class="contents">1) git init</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Start by creating your remote repository on Github. Then, using Git Bash, navigate to your project's directory and type <span class="blue">git init</span>

After you do that, you'll type <span class="blue">git add .</span>, which will "add" all of your existing files to the Git staging area.

<span class="tab_thrice"><a name="prac_lf" class="contents">a) LF will be replaced by CRLF</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

While "adding" all of the files, I got this error:

<div class="git_box">warning: LF will be replaced by CRLF in tooltipster/package.json. The file will have its original line endings in your working directory</div>

Here's the explanation for that error:

<div class="quote">In Unix systems the end of a line is represented with a line feed (LF). In windows a line is represented with a carriage return (CR) and a line feed (LF) thus (CRLF). when you get code from git that was uploaded from a unix system they will only have an LF.

If you are a single developer working on a windows machine, and you don't care that git automatically replaces LFs to CRLFs, you can turn this warning off by typing the following in the git command line:

<span class="blue">git config core.autocrlf true</span></div>

If you want to get into some detail, you can read the <a href="https://git-scm.com/book/en/v2/Customizing-Git-Git-Configuration#Formatting-and-Whitespace" target="_blank">documentation</a>, but the bottom line is that if you're only dealing with Windows, you can turn this warning off.

<span class="tab_twice"><a name="prac_init" class="contents">2) git add origin</a></span>

This establishes the URL of the remote repository. You'll then verify that URL with the command you see below...

<div class="git_box">Bruce@WINDOWS-2SH5T3I MINGW64 /c/wamp64/www/adm/git (master)
$ git remote add origin https://github.com/brucegust/notes_git.git <span class="light_green">// this adds the remote repository to your Git configuration</span>

$ git remote -v <span class="light_green">// this verifies the URL</span>
origin  https://github.com/brucegust/notes_git.git (fetch)
origin  https://github.com/brucegust/notes_git.git (push)
</div>

<span class="tab_twice"><a href="#prac_init" class="contents">3) git push origin master</a></span>

<div class="git_box">Bruce@WINDOWS-2SH5T3I MINGW64 /c/wamp64/www/adm/git (master)
$ git push origin master <span class="light_green">// pushes everything up to your "master" branch</span>
Enumerating objects: 97, done.
Counting objects: 100% (97/97), done.
Delta compression using up to 4 threads
Compressing objects: 100% (89/89), done.
Writing objects: 100% (97/97), 11.88 MiB | 11.88 MiB/s, done.
Total 97 (delta 11), reused 0 (delta 0)
remote: Resolving deltas: 100% (11/11), done.
To https://github.com/brucegust/notes_git.git
 * [new branch]      master -> master</div>




		</div><!--closing tag for content-->
	</div><!--closing tag for wysiwyg-->

<!-- any tooltip content that is, by default, hidden-->
<div class="tooltip_templates" style="display:none; width:350px; padding:10px;">
	<span id="event_handler">
	An Event Handler is an element within a verbose quality of functionality<br>that you can read more about at React Native's <a href="https://facebook.github.io/react-native/docs/handling-touches.html" target="_blank" style="color:#ffffff;">documentation</a>.<br>Bottom line: A number of pre-fabricated triggers that initiate some kind of action.
	</span>
</div>

<!--end tooltip content section-->
</body>
</html>