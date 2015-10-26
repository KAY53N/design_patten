<?php
class WebSiteFactory {
	private $flyweights = array();

	public function getWebSiteCategory($key)
	{
		if(empty($this->flyweights[$key]))
		{
			$this->flyweights = array_merge($this->flyweights, array($key=>new ConcreteWebSite($key)));
		}
		return $this->flyweights[$key];
	}

	public function getWebSiteCount()
	{
		return count($this->flyweights);
	}
}