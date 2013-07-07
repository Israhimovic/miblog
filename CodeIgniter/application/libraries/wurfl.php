<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ===============================================================
 * Clase wurfl que accede a los recursos Wurfl para obtener
 * los datos de la marca y modelo de nuestro dispositivo.
 * 
 * Declaramos una variable $wur donde guardamos la instancia que
 * nos permita acceder a las capacidades de WURFL.
 * ===============================================================
 */
class Wurfl{
   var $wur;
   function Wurfl(){
      	require_once('../wurfl/TeraWurfl.php');

		$this->wur=new TeraWurfl();
		$this->wur->getDeviceCapabilitiesFromRequest();
   }
   /**
	 * ===============================================================
	 * Funcion que devuelve la marca del dispositivo.
     * @return string Devuelve la marca del dispositivo. 
	 * ===============================================================
	**/
   function dameMarca(){	
   		return $this->wur->getDeviceCapability('brand_name');
   }
  	/**
	 * ===============================================================
	 * Funcion que devuelve el modelo del dispositivo.
     * @return string Devuelve el modelo del dispositivo. 
	 * ===============================================================
	**/ 
   function dameModelo(){  	
   		return $this->wur->getDeviceCapability('model_name');
   }
  	/**
	 * ===============================================================
	 * Funcion que devuelve el nombre del mercado del dispositivo.
     * @return string Devuelve el nombre del mercado del dispositivo. 
	 * ===============================================================
	**/
   function dameMarketingName(){
   		return $this->wur->getDeviceCapability('marketing_name');
   }
}

?>