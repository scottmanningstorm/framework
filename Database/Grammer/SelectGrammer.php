<?php 

class SelectGrammer extends GrammerAbstract implements 	GrammerInterface
{	
	protected $query; 

	protected $components = array('select',
								  'table',
								  'where', 
								  'limitBy',
								  'orderBy',
								  'groupBy'
								  ); 

	public function compile(QueryBuilder $query_builder) 
	{
		foreach($components as $component) {

			$component = ucfirst($component);
			
			$this->query[] = $this->{'build'}.$component($query_builder);
		
		}
		//select grammer 
		/* 
			build - Table
				  - columns 
		 		  - Wheres
		 		  -
			SELECT [COLUmn || *] [WHERE Colmun = VALUE] - Limit by, OrderBy, GroupBy
		*/ 
	}

	public function buildSelect(QueryBuilder $query_builder)
	{	
		if (!$query_builder->getColumns()) {

			$columns = '*'; 
		
		}

		$statment = 'SELECT '.$query_builder->columns.'FROM '.$query_builder->table;  
	
		return $statment;

	}

	public function buildWhere(QueryBuilder $query_builder)
	{	
		foreach($query_builder->wheres as $where) {

			$statment = ''; 
		
		}

		return $statment; 
		
	}

	public function buildOrderBy(QueryBuilder $query_builder) 
	{
		if (!!$query_builder->orderBy) {

			$statment = 'ORDER BY '.$query_builder->getOrderBy();
		
		}

		return $statment; 

	}

	public function buildLimitBy(QueryBuilder $query_builder) 
	{
		if (!!$query_builder->getLimitBy()) {

			$statment = 'LIMIT '.$query_builder->getLimitBy();
		
		}
		
		return $statment; 

	}

	public function buildGroupBy(QueryBuilder $query_builder)
	{
		if (!!$query_builder->getGroupBy()) {

			$statment = 'GROUP BY '.$query_builder->getGroupBy(); 
	
		}

		return $statment; 

	}
}

?>