package beans;

public class ValidaUser {
    private String login;
    private String senha;
    
    public boolean validarLoginSenha(String log, String sen) {
        if(log.equals("admin") && sen.equals("123")) {
            return true;
        }
        else {
            return false;
        }
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
}