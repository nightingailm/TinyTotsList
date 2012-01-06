<?php

class listActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    // First part of dashboard new/edit list
    $this->form = new ClassListForm;
    // Set default form data
    if (method_exists($this->getRoute(), 'getObject') &&
      ($list = $this->getRoute()->getObject()))
    {
      $formStudents = '';
      foreach ($list->Students as $student)
      {
        $formStudents .= "$student\n";
      }
      $this->form->setDefault('students', $formStudents);
      $this->form->setDefault('list', $list->id);
    }

    // Second part of dashboard - recent lists
    $this->recentLists = BarbaraList::getRecentLists();
  }

  public function executeSave(sfWebRequest $request)
  {
    $this->form = new ClassListForm;

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter('list'));
      if ($this->form->isValid())
      {
        // Save list
        $list = BarbaraList::saveList($this->form->students,
          $this->form->getValue('list'));
        
        return $this->redirect('list_print', $list);
      }
      else
      {
        return $this->executeIndex($request);
      }
    }
  }

  public function executePrint(sfWebRequest $request)
  {
    // $this->students = $this->getUser()->getAttribute('students');
    $list = $this->getRoute()->getObject();
    $this->students = $list->Students;
  }
}