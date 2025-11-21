package classes;

public class Catalogo {
    private Integer id;
    private String nomeRevista;
    private Integer numeroEdicao;
    private String editora;
    private String generoRevista;
    private Integer quantidade;
    private Double precoUnidade;
    
    public Catalogo() {
        
    }

    public Catalogo(Integer id, String nomeRevista, Integer numeroEdicao, String editora, String generoRevista, Integer quantidade, Double precoUnidade) {
        this.id = id;
        this.nomeRevista = nomeRevista;
        this.numeroEdicao = numeroEdicao;
        this.editora = editora;
        this.generoRevista = generoRevista;
        this.quantidade = quantidade;
        this.precoUnidade = precoUnidade;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNomeRevista() {
        return nomeRevista;
    }

    public void setNomeRevista(String nomeRevista) {
        this.nomeRevista = nomeRevista;
    }

    public Integer getNumeroEdicao() {
        return numeroEdicao;
    }

    public void setNumeroEdicao(Integer numeroEdicao) {
        this.numeroEdicao = numeroEdicao;
    }

    public String getEditora() {
        return editora;
    }

    public void setEditora(String editora) {
        this.editora = editora;
    }

    public String getGeneroRevista() {
        return generoRevista;
    }

    public void setGeneroRevista(String generoRevista) {
        this.generoRevista = generoRevista;
    }

    public Integer getQuantidade() {
        return quantidade;
    }

    public void setQuantidade(Integer quantidade) {
        this.quantidade = quantidade;
    }

    public Double getPrecoUnidade() {
        return precoUnidade;
    }

    public void setPrecoUnidade(Double precoUnidade) {
        this.precoUnidade = precoUnidade;
    }
}