update produtos
	set produtos.nome = '', 
		produtos.loja_id = 0,
        produtos.preco = 0.0,
        produtos.quantidade = 0
	where
    produto.id = 0;