package dao;

import classes.Carro;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import utils.FabricaConexao;

public class CarroDAO {
    private Connection conexao = null;
    
    public CarroDAO() {
        conexao = FabricaConexao.getConexao();
    }
    
    public void salvar(Carro car) {
        String sql;
        
        try {
            PreparedStatement ps;
            
            if(car.getId() == null) {
                sql = "insert into carro (modelo, fabricante, cor, ano) values (?, ?, ?, ?)";
                
                ps = conexao.prepareStatement(sql);
            }
            else {
                sql = "update carro set modelo = ?, fabricante = ?, cor = ?, ano = ? where id = ?";
                
                ps = conexao.prepareStatement(sql);
                ps.setInt(5, car.getId());
            }
            
            Calendar ano = Calendar.getInstance();
            ano.set(Integer.parseInt(car.getAno()), 0, 1);
            
            ps.setString(1, car.getModelo());
            ps.setString(2, car.getFabricante());
            ps.setString(3, car.getCor());
            ps.setDate(4, new Date(ano.getTimeInMillis()));
            
            ps.execute();
            
            FabricaConexao.fecharConexao();
        }
        catch(SQLException ex) {
            Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public List<Carro> buscar() {
        String sql = "select * from carro";
        
        try {
            PreparedStatement ps = conexao.prepareStatement(sql);
            ResultSet results = ps.executeQuery();
            List<Carro> carros = new ArrayList<>();
            
            while(results.next()) {
                Carro car = new Carro();
                
                Calendar ano = Calendar.getInstance();
                ano.setTime(results.getDate("ano"));
                
                car.setId(results.getInt("id"));
                car.setModelo(results.getString("modelo"));
                car.setFabricante(results.getString("fabricante"));
                car.setCor(results.getString("cor"));
                car.setAno(String.valueOf(ano.get(Calendar.YEAR)));
                
                carros.add(car);
            }
            
            return carros;
        }
        catch(SQLException ex) {
            Logger.getLogger(FabricaConexao.class.getName()).log(Level.SEVERE, null, ex);
            
            return null;
        }
    }
}