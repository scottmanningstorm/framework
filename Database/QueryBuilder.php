<?php 

class QueryBuilder
{
	// Holds all our grammer and finally compiles our SQL statment taking in the selected Grammer object.
	protected $limit_by; 

	protected $table; 

	protected $values; 

	protected $order_by; 

	protected $group_by;

	protected $columns; 

	protected $wheres = array();
	
	/////////////
	// setters // 
	/////////////
	public function setLimit($limit) 
	{
		$this->limit_by = $limit; 
	}

	public function setTable($table) 
	{
		$this->table = $table; 
	}

	public function setValues($values) 
	{
		if (!is_array($values)) {
			
			$this->values = $value; 
		
		} else {

			foreach ($values as $key => $value) {
				
				$this->values[$key] = $value; 
			
			}

		}
	}

	public function setOrderBy($order) 
	{
		$this->order_by = $order; 
	}

	public function setGroupBy($group) 
	{
		$this->group_by = $group; 
	}

	public function setColumns($column) 
	{
		$this->columns = $columns; 
	}

	public function setWhere($wheres) 
	{
		$this->wheres[] = $wheres; 
	}


	/////////////
	// Getters //
	/////////////
	public function getLimitBy() 
	{
		return $this->limit_by;
	}

	public function getTable() 
	{
		return $this->table; 
	}

	public function getValues() 
	{
		return $this->values; 
	}

	public function getOrderBy() 
	{
		return $this->order_by; 
	}

	public function getGroupBy() 
	{
		return $this->group_by; 
	}

	public function getColumns() 
	{
		return $this->columns; 
	}

	public function getWheres() 
	{
		return $this->wheres; 
	}

}

?>