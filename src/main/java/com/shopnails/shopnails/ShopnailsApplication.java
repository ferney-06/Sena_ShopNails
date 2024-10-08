package com.shopnails.shopnails;

import java.time.LocalDate;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.shopnails.shopnails.controllers.InformacionSena;


@RestController
@SpringBootApplication
public class ShopnailsApplication {

	public static void main(String[] args) {
		SpringApplication.run(ShopnailsApplication.class, args);
	}



	//Crear una URL amigable de lo que va a salir en la pagina
	@GetMapping ("/sena")

	//Para traer informacion 
	public InformacionSena messageView () {
		
		return new InformacionSena(LocalDate.now(), "Wilfer Ferney", "Rojas Beltran", "2721426");
	}

}
