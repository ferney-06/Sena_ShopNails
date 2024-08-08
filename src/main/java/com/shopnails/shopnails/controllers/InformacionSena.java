package com.shopnails.shopnails.controllers;

import java.time.LocalDate;

public class InformacionSena {

    private LocalDate FechaHoy;
    private String NombreAprendiz;
    private String ApellidoAprendiz;
    private String FichaAprendiz;
    
    public InformacionSena(LocalDate fechaHoy, String nombreAprendiz, String apellidoAprendiz, String fichaAprendiz) {
        this.FechaHoy = fechaHoy;
        this.NombreAprendiz = nombreAprendiz;
        this.ApellidoAprendiz = apellidoAprendiz;
        this.FichaAprendiz = fichaAprendiz;
    }

    public InformacionSena() {
    }

    public LocalDate getFechaHoy() {
        return FechaHoy;
    }

    public String getNombreAprendiz() {
        return NombreAprendiz;
    }

    public String getApellidoAprendiz() {
        return ApellidoAprendiz;
    }

    public String getFichaAprendiz() {
        return FichaAprendiz;
    }

    
    public void setFechaHoy(LocalDate fechaHoy) {
        FechaHoy = fechaHoy;
    }

    public void setNombreAprendiz(String nombreAprendiz) {
        NombreAprendiz = nombreAprendiz;
    }

    public void setApellidoAprendiz(String apellidoAprendiz) {
        ApellidoAprendiz = apellidoAprendiz;
    }

    public void setFichaAprendiz(String fichaAprendiz) {
        FichaAprendiz = fichaAprendiz;
    }

    
    
}
