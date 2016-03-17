<?php

	class Model{

		protected $db;
		protected $stmt;

		function __construct(){
			$this->db=DB::singleton();
		}

		function query($sql)
		{
			$this->stmt=$this->db->prepare($sql);
		}

		function bind($param, $value)
		{
			switch ($value) {
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_string($value):
					$type = PDO::PARAM_STR;
					break;
			}
			$this->stmt->bindValue($param, $value, $type = null);
		}

		function execute()
		{
			$this->stmt->execute();
		}

		function resultSet()
		{
			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		function single()
		{

			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

		}

		function rowCount()
		{
			return $this->stmt->rowCount();
		}

		function lastInsertId()
		{
			return $this->stmt->lastInsertId();
		}

		function beginTransaction()
		{
			$this->db->beginTransaction();
		}

		function endTransaction()
		{
			$this->db->endTransaction();
		}

		function cancelTransaction()
		{
			$this->db->cancelTransaction();
		}

		function debugDumpParams()
		{
			$this->stmt->debugDumpParams();
		}
	}