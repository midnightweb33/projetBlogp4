<?php 
namespace App;	
/**
 * Class autoloader
*/	
	class autoloader{
	/**
	 * Enregistre notre autoloader
	*/
		static function register(){
			spl_autoload_register(array(__CLASS__,'autoload'));
		}
	/**
	 * inclue le fichier correspondant à notre class
	 * @param $class string Le nom de la classe à charger
	*/
		static function autoload($class){
			if(strrpos($class, __NAMESPACE__.'\\')===0){
				var_dump($class);
				$class=str_replace(__NAMESPACE__, '\\', $class);
				var_dump($class);
				$class=str_replace('\\', '/', $class);
				var_dump($class);
				var_dump(__DIR__.'/'.$class.'.php');
				require __DIR__.'/'.$class.'.php';

			}
		}
	}
?>
