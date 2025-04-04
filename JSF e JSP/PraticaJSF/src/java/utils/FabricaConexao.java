package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class FabricaConexao {
    private static Connection conexao;
    private static final String URL_CONEXAO = "jdbc:postgresql://localhost:5432/sistema_carros";
    private static final String USUARIO = "postgres";
    private static final String SENHA = "admin";
    
    public static Connection getConexao() throws ErroSistema {
        if(conexao == null) {
            try {
                Class.forName("org.postgresql.Driver");
                conexao = DriverManager.getConnection(URL_CONEXAO, USUARIO, SENHA);
            }
            catch(SQLException ex) {
                throw new ErroSistema("Não foi Possível Conectar ao Banco de Dados!", ex);
            }
            catch(ClassNotFoundException ex) {
                throw new ErroSistema("O Driver de Banco de Dados não foi Encontrado!", ex);
            }
        }
        
        return conexao;
    }
    
    public static void fecharConexao() throws ErroSistema {
        if(conexao != null) {
            try {
                conexao.close();
                conexao = null;
            }
            catch(SQLException ex) {
                throw new ErroSistema("Erro ao Fechar a Conexão com o Banco de Dados!", ex);
            }
        }
    }
}
