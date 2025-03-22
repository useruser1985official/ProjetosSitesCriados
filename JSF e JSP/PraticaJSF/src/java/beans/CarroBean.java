package beans;

import classes.Carro;
import dao.CarroDAO;
import java.util.ArrayList;
import java.util.List;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;

@SessionScoped
@ManagedBean
public class CarroBean {
    private Carro car = new Carro();
    private List<Carro> carros = new ArrayList<>();
    private CarroDAO carD = new CarroDAO();
    
    public void adicionar() {
        carD.salvar(car);
        car = new Carro();
    }
    
    public void listar() {
        carros = carD.buscar();
    }
    
    public void editar(Carro c) {
        car = c;
    }

    public Carro getCar() {
        return car;
    }

    public void setCar(Carro car) {
        this.car = car;
    }

    public List<Carro> getCarros() {
        return carros;
    }

    public void setCarros(List<Carro> carros) {
        this.carros = carros;
    }
}