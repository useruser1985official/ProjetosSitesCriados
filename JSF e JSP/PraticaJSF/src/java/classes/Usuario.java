package classes;

import java.util.Objects;

public class Usuario {
    private Integer id;
    public String login;
    public String senha;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getLogin() {
        return login;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    @Override
    public int hashCode() {
        int hash = 5;
        hash = 89 * hash + Objects.hashCode(this.id);
        hash = 89 * hash + Objects.hashCode(this.login);
        hash = 89 * hash + Objects.hashCode(this.senha);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if(this == obj) {
            return true;
        }
        
        if(obj == null) {
            return false;
        }
        
        if(getClass() != obj.getClass()) {
            return false;
        }
        
        final Usuario other = (Usuario)obj;
        
        if(!Objects.equals(this.login, other.login)) {
            return false;
        }
        
        if(!Objects.equals(this.senha, other.senha)) {
            return false;
        }
        
        return Objects.equals(this.id, other.id);
    }
}