package connection;

import java.sql.Connection;
import java.sql.DriverManager;

public class SingleConnection {
    private static final String BANCO = "jdbc:postgresql://localhost:5432/cursojsp?autoReconnect=true";
    private static final String USER = "postgres";
    private static final String PASSWORD = "admin";
    private static Connection conexao = null;
    
    static {
        conectar();
    }
    
    public SingleConnection() {
        conectar();
    }
    
    private static void conectar() {
        try {
            if(conexao == null) {
                Class.forName("org.postgresql.Driver");
                
                conexao = DriverManager.getConnection(BANCO, USER, PASSWORD);
                
                conexao.setAutoCommit(false);
            }
        }
        catch(Exception ex) {
            throw new RuntimeException("Erro ao conectar com o banco");
        }
    }
    
    public static Connection getConexao() {
        return conexao;
    }
}