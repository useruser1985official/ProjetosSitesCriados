package dao;

import connection.*;
import hashs.CriptSenha;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public class DAOLogin {
    private Connection conexao;
    
    public DAOLogin() {
        conexao = SingleConnection.getConexao();
    }
    
    public boolean validarLoginSenha(String login, String senha) throws Exception {
        String sql = "select * from usuario where login = ? and senha = ?";
        PreparedStatement stmt = conexao.prepareStatement(sql);
        
        stmt.setString(1, login);
        stmt.setString(2, CriptSenha.encripta(senha, "SHA-1"));
        
        ResultSet rs = stmt.executeQuery();
        
        if(rs.next()) {
            return true;
        }
        else {
            return false;
        }
    }
}