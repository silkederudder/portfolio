<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'ProjectDAO.php';
require_once WWW_ROOT . 'dao' . DS . 'ProjectVisualDAO.php';

class ProjectsController extends Controller {

  private $projectDAO;

  function __construct() {
    $this->projectDAO = new ProjectDAO();
    $this->projectVisualDAO = new ProjectVisualDAO();
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
      header('Location:' . $siteUrlRoot . '/error');
      exit();
    }

    $visuals = $this->projectVisualDAO->selectById($project['id']);

    $this->set('project', $project);
    $this->set('visuals', $visuals);
    $this->set('title', 'Detail');
    $this->set('currentPage', 'overview');
  }

  public function error() {
    $this->set('title', '404 page not found');
    $this->set('currentPage', 'error');
  }
}
