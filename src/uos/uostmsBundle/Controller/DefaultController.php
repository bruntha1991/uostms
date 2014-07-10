<?php

namespace uos\uostmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uosuostmsBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function uosAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('uosuostmsBundle:Users');

        if ($request->getMethod() == 'POST') {

           $user_id = $request->get('user_id');
            $password = $request->get('password');

            $user = $repository->findOneBy(array('userId' => $user_id, 'password' => $password));
            
                
                
            if ($user) {
                
                $session = new Session();
                $session->start();
                $session->set('name', $user->getName());
                $session->set('job', $user->getJob());  
                
                $session->getFlashBag()->add('users', 'Loged In');
                
                
                return $this->render('uosuostmsBundle:Default:home.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
            } else {
                return $this->render('uosuostmsBundle:Default:uos.html.twig', array('error' => 'Incorrect UserID or Password'));
            }
        }
        return $this->render('uosuostmsBundle:Default:uos.html.twig');
    }
    
    public function fsAction(Request $request)
    {        
        $session  = $this->get("session");
        return $this->render('uosuostmsBundle:Default:findsub.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job'),));
    }
    
    public function ffAction()
    {
        $session  = $this->get("session");
        return $this->render('uosuostmsBundle:Default:findfree.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job'),));
    }
    
    public function fsrAction(Request $request)
    {
        
        
        if ($request->getMethod() == 'POST') {

           $year = $request->get('year');
            $timeslot = $request->get('timeslot');
            $date=$request->get('date');
            
         //   $originalDate = "2010-03-21";
         //   $newDate = date("YYYY-mm-dd", strtotime($date));
  //       $dates = explode("/",$date);
 //        $d= array($dates[2],$dates[0],$dates[1]);
 //        $newDate = implode("-",$d);
         
         $newDate= new \DateTime($date);
         
         

  //      $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();
 //       $timetable = new Timetable();
        
  //      Date d=new Date($newDate);
        
        $session  = $this->get("session");
        
        $timetable = $em->getRepository('uosuostmsBundle:Timetable')->findOneBy(
    array('year' => $year,'timeslot'=>$timeslot,'date'=>$newDate )
                
                
);
            
      if($timetable){
          $hall= $timetable->getHall();
          $module= $timetable->getModule();
          $lecturer= $timetable->getLecturer();
          
          return $this->render('uosuostmsBundle:Default:findsubr.html.twig', array('year' => $year,
                    'timeslot'=>$timeslot , 'date'=>$date, 'hall'=>$hall , 'module' => $module, 'lecturer' =>$lecturer,'name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
      else
      {
          return $this->render('uosuostmsBundle:Default:findsubr.html.twig', array('error' =>'Not Available','name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
                
  //          }
        }
        return $this->render('uosuostmsBundle:Default:findsubr.html.twig');
    }
    
    public function ffrAction(Request $request)
    {
        $session  = $this->get("session");
        
        if ($request->getMethod() == 'POST') {
            
            $timeslot = $request->get('timeslot');
            $date=$request->get('date');

  //      $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();
 //       $timetable = new Timetable();
        $newDate= new \DateTime($date);
        
        $stmt = $em->getConnection()->prepare('select year, module, T.name as name, lecturers.name as lec from lecturers inner join ((select year,module,hall.name as name,timetablel.name as lecturer from timetablel inner join hall on timetablel.hall=hall.id where date=:date  and timeslot =:timeslot)  as T ) on T.lecturer=lecturers.id');
                
             
                $stmt->bindValue(':date', $date);
                $stmt->bindValue(':timeslot', $timeslot);                
                $stmt->execute();
                $users = $stmt->fetchAll();
                
  /*              $id=$users.lec;
                $stmtl = $em->getConnection()->prepare('select user_id from users where id= :id');
                $stmtl->bindValue(':id', $id);
                           
                $stmt->execute();
                $lec = $stmt->fetchAll();
  */              
      if($users){
                  
          return $this->render('uosuostmsBundle:Default:findfreer.html.twig', array('entities'=>$users,'name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
      else
      {
          return $this->render('uosuostmsBundle:Default:findfreer.html.twig', array('error' =>'Not Available','name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
                
  //          }
        }
        return $this->render('uosuostmsBundle:Default:findfreer.html.twig');
    }   
    
    public function fttlAction()
    {
        $session  = $this->get("session");
        return $this->render('uosuostmsBundle:Default:findttl.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job'),));
    }
    
    public function fttlrAction(Request $request)
    {
        $session  = $this->get("session");
        
        if ($request->getMethod() == 'POST') {

          
            $timeslot = $request->get('timeslot');
            $date=$request->get('date');

  //      $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();
 //       $timetable = new Timetable();
        $newDate= new \DateTime($date);
       
                
        $lecturer =$em->getRepository('uosuostmsBundle:Lecturers')->findOneBy(
    array('name' => $session->get('name')));
                
        $timetablel = $em->getRepository('uosuostmsBundle:Timetablel')->findOneBy(
    array('timeslot' => $timeslot,'date'=>$newDate,'name'=>$lecturer->getID())           
                
);
            
      if($timetablel){
          $hall= $timetablel->getHall();
          $module= $timetablel->getModule();
          $lecturer= $timetablel->getName();
          $year=$timetablel->getYear();
          
          return $this->render('uosuostmsBundle:Default:findttlr.html.twig', array('year' => $year,
                    'timeslot'=>$timeslot , 'date'=>$date, 'hall'=>$hall , 'module' => $module, 'lecturer' =>$lecturer,'name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
      else
      {
          return $this->render('uosuostmsBundle:Default:findttlr.html.twig', array('error' =>'No Lectures','name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
                
  //          }
        }
        return $this->render('uosuostmsBundle:Default:findttlr.html.twig');
    }
    
    public function falllAction()
    {
        $session  = $this->get("session");
        return $this->render('uosuostmsBundle:Default:findalll.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job'),));
    }
    
    public function falllrAction(Request $request)
    {
        $session  = $this->get("session");
        if ($request->getMethod() == 'POST') {

          
            $timeslot = $request->get('timeslot');
            $date=$request->get('date');

  //      $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();
 //       $timetable = new Timetable();
        $newDate= new \DateTime($date);
        
        $stmt = $em->getConnection()->prepare('select name from hall  where name not in (select name from timetable inner join hall on timetable.hall=hall.id where date= :date and timeslot = :timeslot )');
                
             
                $stmt->bindValue(':date', $date);
                $stmt->bindValue(':timeslot', $timeslot);                
                $stmt->execute();
                $rooms = $stmt->fetchAll();
            
                
      if($rooms){         
          
          return $this->render('uosuostmsBundle:Default:findalllr.html.twig', array('entities' => $rooms,'name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
      else
      {
          return $this->render('uosuostmsBundle:Default:findttlr.html.twig', array('error' =>'Not Available','name' => $session->get('name'),
            'job'=>$session->get('job'),));
      }
        
        }
        return $this->render('uosuostmsBundle:Default:findttlr.html.twig');
    }
    
    public function hallAction(Request $request)
    {
        $hall=$request->get('hall');
        $session  = $this->get("session");
        
        if($hall==='FGL 3')
        {
            return $this->render('uosuostmsBundle:Default:fg3.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='FGL 1')
        {
            return $this->render('uosuostmsBundle:Default:fg1.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='FGL 2')
        {
            return $this->render('uosuostmsBundle:Default:fg2.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='FGL 4')
        {
            return $this->render('uosuostmsBundle:Default:fg4.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='Computer lab')
        {
            return $this->render('uosuostmsBundle:Default:cl.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='GIS lab')
        {
            return $this->render('uosuostmsBundle:Default:gisl.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='Geodetic Lab')
        {
            return $this->render('uosuostmsBundle:Default:gl.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='Photogrammetry Lab')
        {
            return $this->render('uosuostmsBundle:Default:photol.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='Physics Lab')
        {
            return $this->render('uosuostmsBundle:Default:pl.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='Reading hall')
        {
            return $this->render('uosuostmsBundle:Default:rh.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
        else if($hall ==='Remote sensing Lab')
        {
            return $this->render('uosuostmsBundle:Default:rsl.html.twig',array('name' => $session->get('name'),
            'job'=>$session->get('job')));
        }
     }
    
}
