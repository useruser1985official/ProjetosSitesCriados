package beans;

import classes.Usuario;
import dao.UsuarioDAO;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import utils.ErroSistema;

@SessionScoped
@ManagedBean
public class UsuarioBean extends CrudBean<Usuario, UsuarioDAO> {
    private UsuarioDAO userD;
    
    @Override
    public UsuarioDAO getDao() {
        if(userD == null) {
            try {
                userD = new UsuarioDAO();
            }
            catch(ErroSistema ex) {
                Logger.getLogger(UsuarioBean.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        
        return userD;
    }

    @Override
    public Usuario criarNovaEntidade() {
        return new Usuario();
    }
}