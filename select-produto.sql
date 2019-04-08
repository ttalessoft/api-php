select
	lojas.nome,
    produtos.nome,
    produtos.preco,
    produtos.quantidade
from
	produtos
inner join 
	lojas on produtos.loja_id = lojas.id
where
	produtos.nome like '%blu%'
order by produtos.nome asc
    