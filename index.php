<?php
// gausah ganti copyright kalo mau di hargai
// 99syndicate - Anon Cyber Team
// Author By : Mr.cakil
// bug report : mrcakil@programmer.net
function disable_ob(){
	ini_set('output_buffering','off');
	ini_set('zlib.output_compression',false); ini_set('implicit_flush',true); ob_implicit_flush(true);
	while(ob_get_level()>0){
		$level = ob_get_level();
		ob_end_clean();
		if(ob_get_level()== $level);
	}
	if(function_exists('apache_setenv')){
		apache_setenv('no-gzip','1'); apache_setenv('dont-vary','1');
	}
}
@system("clear");
$blue="\033[0;34";
$cyan="\033[0;36m";
$green="\033[0;34m";
$okegreen="\033[92m";
$lightgreen="\033[1;32m";
$white="\033[1;37m";
$red="\033[1;31m";
$yellow="\033[1;33m";
print "$red
    =======================================================================================
    ||      ██████╗ ███████╗███╗   ██╗████████╗███████╗███████╗████████╗███████╗██████╗   ||
    ||      ██╔══██╗██╔════╝████╗  ██║╚══██╔══╝██╔════╝██╔════╝╚══██╔══╝██╔════╝██╔══██╗  ||
    ||      ██████╔╝█████╗  ██╔██╗ ██║   ██║   █████╗  ███████╗   ██║   █████╗  ██████╔╝  ||
    ||      ██╔═══╝ ██╔══╝  ██║╚██╗██║   ██║   ██╔══╝  ╚════██║   ██║   ██╔══╝  ██╔══██╗  ||
    ||      ██║     ███████╗██║ ╚████║   ██║   ███████╗███████║   ██║   ███████╗██║  ██║  ||
    ||      ╚═╝     ╚══════╝╚═╝  ╚═══╝   ╚═╝   ╚══════╝╚══════╝   ╚═╝   ╚══════╝╚═╝  ╚═╝  ||
    ||                                                                                    ||\n";
print "$red        [ =========================================================================== ]\n";
print "$red                   TOOLS PENTESTER V2.3\n";
print "$red                   based : php-cli\n";
print "$red                   Coded by Mr. Cakil 99syndicate\n";
print "$white                   blog : http://99-syndicate.blogspot.com\n";
print "$white                   contact : mrcakil@programmer.net\n";
print "$white                   usage: php namafile.php \n";
print "$white                   Thanks To :  Anon Cyber Team - 99Syndicate\n";
print "$white        [ ===========================================================================]\n\n
  [$red 1 $white] Whois Lookup
  [$red 2 $white] Traceroute
  [$red 3 $white] DNS Lookup
  [$red 4 $white] Reverse DNS Lookup
  [$red 5 $white] GeoIP Lookup
  [$red 6 $white] Port Scan
  [$red 7 $white] Reverse IP Lookup
  echo "pilihan => "; $cakil=trim(fgets(STDIN));
if($cakil=="1"){
	echo "masukan ip or domain : "; $whois=trim(fgets(STDIN));
	@system("curl http://api.hackertarget.com/whois/?q=$whois");
	echo "done\n";
   elseif($cakil=="1"){
echo "Please wait Mastah :) ";
@system("cd smspamming ; php spamming.php ");
}
}
