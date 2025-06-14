<?php
session_start();
include('layouts/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique d'Annulation | Justine Soins Capillaires</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <style>
        :root {
            --primary: #ff8000;
            --secondary: #343a40;
            --light: #f8f9fa;
            --dark: #212529;
        }

        .cancellation-policy {
            background-color: var(--dark);
            color: white;
            min-height: 100vh;
            padding: 4rem 0;
        }

        .policy-header {
            margin-bottom: 3rem;
            text-align: center;
        }

        .policy-title {
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 3.5rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .policy-title:after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: var(--primary);
            margin: 1rem auto;
        }

        .policy-intro {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 3rem;
            line-height: 1.6;
        }

        .policy-box {
            background: rgba(255, 255, 255, 0.05);
            border-left: 4px solid var(--primary);
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 0 8px 8px 0;
            transition: transform 0.3s ease;
        }

        .policy-box:hover {
            transform: translateX(10px);
        }

        .policy-box h3 {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .policy-box h3:before {
            content: '';
            position: absolute;
            left: -2rem;
            top: 50%;
            transform: translateY(-50%);
            width: 15px;
            height: 15px;
            background: var(--primary);
            border-radius: 50%;
        }

        .policy-box p {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 0;
        }

        .policy-conclusion {
            font-size: 1.3rem;
            text-align: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            .policy-title {
                font-size: 2.5rem;
            }

            .policy-intro {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>

    <!-- ############## -->
    <!-- Politique -->
    <!-- ############## -->
    <section class="cancellation-policy">
        <div class="container">
            <div class="policy-header">
                <h1 class="policy-title">Politique d'Annulation</h1>
                <p class="policy-intro">
                    Chez Justine Soins Capillaires (JSC), nous nous engageons à fournir un service de qualité à chacun de nos clients.
                    Afin de garantir une expérience optimale pour tous, nous avons établi les directives suivantes concernant les annulations de rendez-vous.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="policy-box">
                        <h3><i class="fas fa-bell me-2"></i>Notification d'annulation</h3>
                        <p>
                            Si vous devez annuler ou modifier votre rendez-vous, nous vous prions de bien vouloir nous en informer au moins 24 heures à l'avance.
                            Cela nous permettra de réorganiser nos horaires et offrir votre créneau à un autre client.
                        </p>
                    </div>

                    <div class="policy-box">
                        <h3><i class="fas fa-clock me-2"></i>Annulations tardives</h3>
                        <p>
                            Toute annulation effectuée moins de 24 heures avant votre rendez-vous entraînera des frais d'annulation de 30% du montant total du service réservé.
                            Ces frais seront appliqués lors de votre prochain rendez-vous.
                        </p>
                    </div>

                    <div class="policy-box">
                        <h3><i class="fas fa-user-slash me-2"></i>Absence</h3>
                        <p>
                            Si vous ne vous présentez pas à votre rendez-vous sans préavis, nous considérons cela comme une absence. Dans ce cas, des frais équivalents à 50% du montant total du service réservé seront facturés et devront être réglés lors de votre prochaine visite.
                        </p>
                    </div>

                    <div class="policy-box">
                        <h3><i class="fas fa-exclamation-circle me-2"></i>Exceptions</h3>
                        <p>
                            Nous comprenons que des circonstances imprévues peuvent survenir. Si vous avez des raisons valables pour annuler un rendez-vous (comme une urgence médicale), veuillez nous contacter directement. Nous examinerons chaque situation au cas par cas.
                        </p>
                    </div>

                    <div class="policy-box">
                        <h3><i class="fas fa-calendar-alt me-2"></i>Modification de rendez-vous</h3>
                        <p>
                            Si vous souhaitez modifier votre rendez-vous, veuillez nous contacter le plus tôt possible. Nous ferons de notre mieux pour répondre à votre demande.
                        </p>
                    </div>

                    <p class="policy-conclusion">
                        <i class="fas fa-heart me-2" style="color: var(--primary);"></i>
                        Merci pour votre compréhension et votre coopération ! Nous sommes impatients de vous accueillir chez Justine Soins Capillaires (JSC).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('layouts/footer.php'); ?>