<?php

namespace App\Entity\Traits;

enum StatusEnum : string{
    case PENDING = 'En attente';         // Lorsqu'une action ou une approbation est en attente
    case APPROVED = 'Approuvé';          // Quand une annonce ou une réservation est validée
    case DECLINED = 'Refusé';            // Quand une demande ou réservation est refusée
    case COMPLETED = 'Terminé';          // Quand l'opération est finalisée (ex: colis livré)
    case CANCELED = 'Annulé';            // Pour les actions ou réservations annulées
    case IN_PROGRESS = 'En cours';       // Quand une action est en train de se dérouler
    case EXPIRED = 'Expiré';             // Quand une annonce ou une réservation dépasse sa date limite
    case PAID = 'Payé';                  // Quand un paiement a été effectué
    case UNPAID = 'Non payé';            // Statut d'un paiement en attente
}