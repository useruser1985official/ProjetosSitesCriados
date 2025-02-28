package filter;

import connection.SingleConnection;
import java.io.IOException;
import java.sql.Connection;
import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebFilter;

@WebFilter(urlPatterns={"/*"})
public class FilterConnection implements Filter {
    private static Connection conexao;
    
    @Override
    public void init(FilterConfig filterConf) throws ServletException {
        SingleConnection.getConexao();
    }

    @Override
    public void doFilter(ServletRequest request, ServletResponse response, FilterChain chain) throws IOException, ServletException {
        try {
            chain.doFilter(request, response);
            
            conexao.commit();
        }
        catch(Exception ex) {
            try {
                conexao.rollback();
            }
            catch(Exception ex2) {
                ex2.printStackTrace();
            }
        }
    }

    @Override
    public void destroy() {

    }  
}