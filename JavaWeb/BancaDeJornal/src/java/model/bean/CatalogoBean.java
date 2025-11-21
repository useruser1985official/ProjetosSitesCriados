package model.bean;

import classes.Catalogo;
import model.dao.CatalogoDAO;
import java.util.List;
import java.util.ArrayList;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;

@SessionScoped
@ManagedBean
public class CatalogoBean {
    private Catalogo cat = new Catalogo();
    private CatalogoDAO catD = new CatalogoDAO();
    private List<Catalogo> catalogos = new ArrayList<>();
    
    public void novo() {
        cat = new Catalogo();
    }
    
    public void adicionar() {
        new CatalogoDAO().salvar(cat);
        cat = new Catalogo();
        listar();
    }
    
    public void listar() {
        catalogos = catD.buscar();
    }
    
    public void editar(Catalogo c) {
        cat = c;
        listar();
    }
    
    public void deletar(Catalogo c) {
        catD.excluir(c);
        listar();
    }

    public Catalogo getCat() {
        return cat;
    }

    public void setCat(Catalogo cat) {
        this.cat = cat;
    }

    public List<Catalogo> getCatalogos() {
        return catalogos;
    }

    public void setCatalogos(List<Catalogo> catalogos) {
        this.catalogos = catalogos;
    }
}