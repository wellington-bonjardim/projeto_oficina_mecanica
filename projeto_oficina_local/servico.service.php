<?php 
    class ServicoService {
        private $conexao;
        private $servico;
        
        public function __construct(Conexao $conexao, Servico $servico) {
            $this->conexao = $conexao->conectar();
            $this->servico = $servico;
        }
        
        public function inserir() {
            $query = '
                insert into tb_servicos(nome, contato, servico, valor, situacao)VALUES(:nome, :contato, :servico, :valor, :situacao) 
            ';
            
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->servico->__get('nome'));
            $stmt->bindValue(':contato', $this->servico->__get('contato'));
            $stmt->bindValue(':servico', $this->servico->__get('servico'));
            $stmt->bindValue(':valor', $this->servico->__get('valor'));
            $stmt->bindValue(':situacao', $this->servico->__get('situacao'));
            $stmt->execute();
        }

        public function recuperar() {
            $query = '
                select
                    serv.id, serv.nome, serv.contato, serv.servico, serv.valor, st.situacao
                from
                    tb_servicos as serv
                    left join tb_status as st on (serv.situacao = st.id)
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function pagarServico() {
            $query = '
                update tb_servicos set situacao = :situacao where id = :id
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':situacao', $this->servico->__get('situacao'));
            $stmt->bindValue(':id', $this->servico->__get('id'));
            return $stmt->execute();
        }

        public function remover() {
            $query = 'delete from tb_servicos where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->servico->__get('id'));
            $stmt->execute();
        }
    }
?>