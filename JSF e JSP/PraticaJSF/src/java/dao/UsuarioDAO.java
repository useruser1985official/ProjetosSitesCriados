package dao;

import classes.Usuario;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import utils.ErroSistema;
import utils.FabricaConexao;

public class UsuarioDAO implements CrudDAO<Usuario> {
    private Connection conexao = null;
    
    public UsuarioDAO() throws ErroSistema {
        conexao = FabricaConexao.getConexao();
    }

    @Override
    public void salvar(Usuario ent) throws ErroSistema {
        String sql;
        
        try {
            PreparedStatement ps;
            
            if(ent.getId() == null) {
                sql = "insert into usuario (login, senha) values (?, ?)";
                
                ps = conexao.prepareStatement(sql);
            }
            else {
                sql = "update usuario set login = ?, senha = ? where id = ?";
                
                ps = conexao.prepareStatement(sql);
                ps.setInt(3, ent.getId());
            }
            
            ps.setString(1, ent.getLogin());
            ps.setString(2, ent.getSenha());
            
            ps.execute();
            
            FabricaConexao.fecharConexao();
        }
        catch(SQLException ex) {
            throw new ErroSistema("Erro ao Tentar Salvar!", ex);
        }
    }
    @Override
    public List<Usuario> buscar() throws ErroSistema {
        String sql = "select * from usuario";
        
        try {
            PreparedStatement ps = conexao.prepareStatement(sql);
            ResultSet results = ps.executeQuery();
            List<Usuario> usuarios = new ArrayList<>();
            
            while(results.next()) {
                Usuario user = new Usuario();
                
                user.setId(results.getInt("id"));
                user.setLogin(results.getString("login"));
                user.setSenha(results.getString("senha"));
                
                usuarios.add(user);
            }
            
            return usuarios;
        }
        catch(SQLException ex) {
            throw new ErroSistema("Erro ao Buscar os Dados!", ex);
        }
    }
    
    @Override
    public void deletar(Usuario ent) throws ErroSistema {
        String sql = "delete from usuario where id = ?";
        
        try {
            PreparedStatement ps = conexao.prepareStatement(sql);
            
            ps.setInt(1, ent.getId());
            
            ps.execute();
        }
        catch(SQLException ex) {
            throw new ErroSistema("Erro ao Deletar o Usuário!", ex);
        }
    }
}