/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package servlet;

import dao.DAOLogin;
import java.io.IOException;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author eu
 */
@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {
    private static final long SERIALVERSION = 1L;
    private DAOLogin dao = new DAOLogin();
    
    public LoginServlet() {
        super();
    }
    
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        doPost(request, response);
    }
    
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String login = request.getParameter("login").trim();
        String senha = request.getParameter("senha").trim();
        
        RequestDispatcher dispatcher;
        
        try {
            if(dao.validarLoginSenha(login, senha)) {
                dispatcher = request.getRequestDispatcher("acessoliberado.jsp");
            }
            else {
                dispatcher = request.getRequestDispatcher("acessonegado.jsp");
            }
            
            dispatcher.forward(request, response);
        }
        catch(Exception ex) {
            System.err.println(ex.getMessage());
        }
    }
}
