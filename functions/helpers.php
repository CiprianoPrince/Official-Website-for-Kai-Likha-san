<?php
function currentPage()
{
	return substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
}

function setActiveGradientPrimary($page)
{
	if (str_contains($page, currentPage())) {
		return 'active bg-gradient-primary';
	}
}

function setActiveFadePrimary($page)
{
	if (str_contains($page, currentPage())) {
		return 'active bg-gradient-faded-primary';
	}
	return '';
}

function setCollapse($page)
{
	if (str_contains($page, currentPage())) {
		return 'collapse show';
	}
	return 'collapse';
}
