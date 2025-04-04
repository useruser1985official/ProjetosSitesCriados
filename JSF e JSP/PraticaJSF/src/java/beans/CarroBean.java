package beans;

import classes.Carro;
import dao.CarroDAO;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import utils.ErroSistema;

@SessionScoped
@ManagedBean
public class CarroBean extends CrudBean<Carro, CarroDAO> {
    private CarroDAO carD;
    
    @Override
    public CarroDAO getDao() {
        if(carD == null) {
            try {
                carD = new CarroDAO();
            }
            catch(ErroSistema ex) {
                Logger.getLogger(CarroBean.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        
        return carD;
    }
    
    @Override
    public Carro criarNovaEntidade() {
        return new Carro();
    }
}