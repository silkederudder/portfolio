<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'ProjectDAO.php';

class ProjectsController extends Controller {

  private $projectDAO;

  function __construct() {
    $this->projectDAO = new ProjectDAO();
  }

  public function overview() {
    $projects = $this->projectDAO->selectAll();

    $this->set('projects', $projects);
    $this->set('title', 'Projects');
    $this->set('currentPage', 'overview');
  }

  public function detail() {
    if (isset($_GET['id'])) {
      $project = $this->projectDAO->selectById($_GET['id']);
    }

    if (empty($project)) {
      $_SESSION['error'] = '404 page not found.';
      header('Location: index.php?page=error');
      exit();
    }

    $this->set('project', $project);
    $this->set('title', 'Detail');
    $this->set('currentPage', 'detail');
  }

  public function error() {
    $this->set('title', '404 page not found');
    $this->set('currentPage', 'error');
  }
}