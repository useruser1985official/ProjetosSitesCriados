package dao;

import java.util.List;
import utils.ErroSistema;

public interface CrudDAO<E> {
    public void salvar(E entidade) throws ErroSistema;
    public void deletar(E entidade) throws ErroSistema;
    public List<E> buscar() throws ErroSistema;
}