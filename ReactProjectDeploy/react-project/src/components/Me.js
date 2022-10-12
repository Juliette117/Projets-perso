import React from 'react';
import './Me.css';
import { LocationCity ,Phone, Mail, DirectionsCar } from '@material-ui/icons';




function Me() {
  return ( 
    <div className='user'>
        <img src='./images/imageprofil.jpg' alt='avatar' className='user_avatar'></img>
        <h1 className='user_name'>Juliette Ancla</h1>
        <h4 className='user_job'>Développeuse Web</h4>
        <div className='user_infos'>
          <p className='user_info'><LocationCity />Mouvaux</p>
          <p className='user_info'>
            <a href="tel:+33641352917" target="blank"><Phone />06.41.35.29.17.</a>
          </p>
          <p className='user_info'>
            <a href="mailto:juliette.ancla@protonmail.com" target="blank"><Mail />juliette.ancla@protonmail.com</a>
          </p>
          <p className='user_info'><DirectionsCar /> Permis B</p>
      </div>
    </div>
  )
  
}

export default Me;

