<?php
interface Subject {
	public function attach($observer);
	public function detach($observer);
	public function notify();
	public function setSubjectStatus($value);
	public function getSubjectStatus();
}

