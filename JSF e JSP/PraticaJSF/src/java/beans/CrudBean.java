package beans;

import dao.CrudDAO;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;
import utils.ErroSistema;

public abstract class CrudBean<E, D extends CrudDAO> {
    private String estadoTela = "buscar";
    private E entidade;
    private List<E> entidadeList;
    
    public void novo() {
        entidade = criarNovaEntidade();
        mudaParaInserir();
    }
    
    public void salvar() {
        try {
            getDao().salvar(entidade);
            entidade = criarNovaEntidade();
            adicionarMensagem("Salvo com Sucesso!", FacesMessage.SEVERITY_INFO);
            mudaParaBuscar();
        }
        catch(ErroSistema ex) {
            adicionarMensagem(ex.getMessage(), FacesMessage.SEVERITY_ERROR);
        }
    }
    
    public void editar(E ent) {
        this.entidade = ent;
        mudaParaEditar();
    }
    
    public void deletar(E ent) {
        try {
            getDao().deletar(ent);
            entidadeList.remove(ent);
            adicionarMensagem("Deletado com Sucesso!", FacesMessage.SEVERITY_INFO);
        }
        catch(ErroSistema ex) {
            adicionarMensagem(ex.getMessage(), FacesMessage.SEVERITY_ERROR);
        }
    }
    
    public void buscar() {
        if(isBusca() == false) {
            mudaParaBuscar();
            
            return;
        }
        
        try {
            entidadeList = getDao().buscar();
            
            if(entidadeList == null | entidadeList.size() < 1) {
                adicionarMensagem("Não Temos Nada Cadastrado!", FacesMessage.SEVERITY_WARN);
            }
        }
        catch(ErroSistema ex) {
            Logger.getLogger(CrudBean.class.getName()).log(Level.SEVERE, null, ex);
            adicionarMensagem(ex.getMessage(), FacesMessage.SEVERITY_ERROR);
        }
    }
    
    public void adicionarMensagem(String mensagem, FacesMessage.Severity tipoErro) {
        FacesMessage fm = new FacesMessage(tipoErro, mensagem, null);
        FacesContext.getCurrentInstance().addMessage(null, fm);
    }
    
    public abstract D getDao();
    public abstract E criarNovaEntidade();
    
    public boolean isInseri() {
        return estadoTela.equals("inserir");
    }
    
    public boolean isEdita() {
        return estadoTela.equals("editar");
    }
    
    public boolean isBusca() {
        return estadoTela.equals("buscar");
    }
    
    public void mudaParaInserir() {
        estadoTela = "inserir";
    }
    
    public void mudaParaEditar() {
        estadoTela = "editar";
    }
    
    public void mudaParaBuscar() {
        estadoTela = "buscar";
    }

    public String getEstadoTela() {
        return estadoTela;
    }

    public void setEstadoTela(String estadoTela) {
        this.estadoTela = estadoTela;
    }

    public E getEntidade() {
        return entidade;
    }

    public void setEntidade(E entidade) {
        this.entidade = entidade;
    }

    public List<E> getEntidadeList() {
        return entidadeList;
    }

    public void setEntidadeList(List<E> entidadeList) {
        this.entidadeList = entidadeList;
    }
}