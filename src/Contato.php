<?php
// src/Contato.php
/**
 * @Entity @Table(name="contatos")
 **/
class Contato
{
    /**
     * @Id
     * @Column (type="bigint", name="id")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Column (type="string", name="nome", length=140, nullable=true)
     */
    protected $nome;
    /**
     * @Column (type="string", name="email", length=100, nullable=true)
     */
    protected $email;
    /**
     * @Column (type="string", name="endereco", length=200, nullable=true)
     */
    protected $endereco;
    /**
     * @Column (type="date", name="dataNascimento", nullable=true)
     */
    protected $dataNascimento;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
}