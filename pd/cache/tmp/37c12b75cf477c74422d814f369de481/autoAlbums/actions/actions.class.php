<?php

/**
 * albums actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage albums
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autoAlbumsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->albumss = Doctrine::getTable('Albums')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AlbumsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AlbumsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($albums = Doctrine::getTable('Albums')->find(array($request->getParameter('aid'))), sprintf('Object albums does not exist (%s).', $request->getParameter('aid')));
    $this->form = new AlbumsForm($albums);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($albums = Doctrine::getTable('Albums')->find(array($request->getParameter('aid'))), sprintf('Object albums does not exist (%s).', $request->getParameter('aid')));
    $this->form = new AlbumsForm($albums);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($albums = Doctrine::getTable('Albums')->find(array($request->getParameter('aid'))), sprintf('Object albums does not exist (%s).', $request->getParameter('aid')));
    $albums->delete();

    $this->redirect('albums/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $albums = $form->save();

      $this->redirect('albums/edit?aid='.$albums->getAid());
    }
  }
}
