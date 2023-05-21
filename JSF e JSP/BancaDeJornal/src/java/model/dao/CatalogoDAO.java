package model.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import conexao.FabricaConexao;
import classes.Catalogo;
import java.util.ArrayList;
import java.util.List;

public class CatalogoDAO {
    private Connection con = null;
    
    public CatalogoDAO() {
        con = FabricaConexao.getConexao();
    }
    
    public boolean salvar(Catalogo cat) {
        String sql;
        
        if(cat.getId() == null){
            sql = "insert into catalogo (nome_revista, numero_edicao, editora, genero_revista, quantidade, preco_unidade) values (?, ?, ?, ?, ?, ?)";
        }
        else {
            sql = "update catalogo set nome_revista = ?, numero_edicao = ?, editora = ?, genero_revista = ?, quantidade = ?, preco_unidade = ? where id = ?";
        }

        PreparedStatement stmt = null;
        
        try {
            stmt = con.prepareStatement(sql);
            
            if(cat.getId() != null) {
                stmt.setInt(7, cat.getId());
            }
            
            stmt.setString(1, cat.getNomeRevista());
            stmt.setInt(2, cat.getNumeroEdicao());
            stmt.setString(3, cat.getEditora());
            stmt.setString(4, cat.getGeneroRevista());
            stmt.setInt(5, cat.getQuantidade());
            stmt.setDouble(6, cat.getPrecoUnidade());
            
            stmt.executeUpdate();
            
            return true;
        }
        catch(SQLException ex) {
            System.err.println("ERRO: " + ex.getMessage());
            
            return false;
        }
    }
    
    public List<Catalogo> buscar() {
        String sql = "select * from catalogo";
        
        PreparedStatement stmt = null;
        ResultSet rs = null;
        
        List<Catalogo> catalogos = new ArrayList<>();
        
        try {
            stmt = con.prepareStatement(sql);
            rs = stmt.executeQuery();
            
            while(rs.next()) {
                Catalogo cat = new Catalogo();
                
                cat.setId(rs.getInt("id"));
                cat.setNomeRevista(rs.getString("nome_revista"));
                cat.setNumeroEdicao(rs.getInt("numero_edicao"));
                cat.setEditora(rs.getString("editora"));
                cat.setGeneroRevista(rs.getString("genero_revista"));
                cat.setQuantidade(rs.getInt("quantidade"));
                cat.setPrecoUnidade(rs.getDouble("preco_unidade"));
                
                catalogos.add(cat);
            }
        }
        catch(SQLException ex) {
            System.err.println("ERRO: " + ex.getMessage());
        }
        
        return catalogos;
    }

    public boolean excluir(Catalogo cat) {
        String sql = "delete from catalogo where id = ?";
        
        PreparedStatement stmt = null;
        
        try {
            stmt = con.prepareStatement(sql);
            
            stmt.setInt(1, cat.getId());
            
            stmt.executeUpdate();
            
            return true;
        }
        catch(SQLException ex) {
            System.err.println("Erro: " + ex.getMessage());
            
            return false;
        }
    }
}