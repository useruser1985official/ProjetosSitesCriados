package dao;

import beans.ValidaUser;
import connection.SingleConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class DAOUsuario {
    private Connection conexao;
    
    public DAOUsuario() {
        conexao = SingleConnection.getConexao();
    }
    
    public void salvar(ValidaUser usuario) {
        String sql = "insert into usuario (login, senha) values (?, ?)";
        PreparedStatement stmt = null;
        
        try {
            stmt = conexao.prepareStatement(sql);
            
            stmt.setString(1, usuario.getLogin());
            stmt.setString(2, usuario.getSenha());
            
            stmt.execute();
            
            conexao.commit();
        }
        catch(Exception ex) {
            ex.printStackTrace();
            
            try {
                conexao.rollback();
            }
            catch(SQLException ex1) {
                ex1.printStackTrace();
            }
        }
    }
    
    public List<ValidaUser> listar() throws Exception {
        List<ValidaUser> lista = new ArrayList<>();
        
        String sql = "select * from usuario";
        
        PreparedStatement stmt = conexao.prepareStatement(sql);
        ResultSet rs = stmt.executeQuery();
        
        while(rs.next()) {
            ValidaUser bean = new ValidaUser();
            
            bean.setLogin(rs.getString("login"));
            bean.setSenha(rs.getString("senha"));
            
            lista.add(bean);
        }
        
        return lista;
    }
}