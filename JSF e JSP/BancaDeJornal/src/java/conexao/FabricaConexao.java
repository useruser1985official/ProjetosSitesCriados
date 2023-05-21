package conexao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.logging.Level;
import java.util.logging.Logger;

public class FabricaConexao {
    private static Connection conexao;
    private static final String driver = "org.postgresql.Driver";
    private static final String url = "jdbc:postgresql://localhost:5432/dbbanca";
    private static final String user = "postgres";
    private static final String pass = "admin";
    
    public static Connection getConexao() {
        if(conexao == null) {
            try {
                Class.forName(driver);
                conexao = DriverManager.getConnection(url, user, pass);
            }
            catch(SQLException | ClassNotFoundException ex) {
                throw new RuntimeException(ex);
            }
        }
        return conexao;
    }
    
    public static void fechaConexao(Connection con) {
        if(con != null) {
            try {
                con.close();
            }
            catch(SQLException ex) {
                Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);  
            }
        }
    }
    
    public static void fechaConexao(Connection con, PreparedStatement stmt) {
        if(stmt != null) {
            try {
                stmt.close();
            }
            catch(SQLException ex) {
                Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);  
            }
        }
        
        fechaConexao(con);
    }
    
    
    public static void fechaConexao(Connection con, PreparedStatement stmt, ResultSet rs) {
        if(rs != null) {
            try {
                rs.close();
            }
            catch(SQLException ex) {
                Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);  
            }
        }
        
        fechaConexao(con, stmt);
    }
}