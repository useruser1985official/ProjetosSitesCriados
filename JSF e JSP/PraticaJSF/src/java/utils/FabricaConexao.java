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
    
    public static Connection getConexao() {
        if(conexao == null) {
            try {
                Class.forName("org.postgresql.Driver");
                conexao = DriverManager.getConnection(URL_CONEXAO, USUARIO, SENHA);
            }
            catch(SQLException | ClassNotFoundException ex) {
                Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        
        return conexao;
    }
    
    public static void fecharConexao() {
        if(conexao != null) {
            try {
                conexao.close();
                conexao = null;
            }
            catch(SQLException ex) {
                Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
}
