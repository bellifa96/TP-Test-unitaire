<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CreateAdminUserCommand extends Command
{
    protected static $defaultName = 'app:create-admin-user';
    private $entityManager;
    private $passwordEncoder;

    /**
     * CreateAdminUserCommand constructor.
     * @param $entityManager
     * @param $passwordEncoder
     */
    public function __construct(string $name= null,EntityManagerInterface $entityManager,UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->entityManager = $entityManager;
        $this->passwordEncoder = $passwordEncoder;
        parent::__construct($name);
    }


    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('email', InputArgument::REQUIRED, 'admin mail')
            ->addArgument('password',InputArgument::REQUIRED, 'admin password')
            ->addArgument('firstName',InputArgument::REQUIRED,'First name')
            ->addArgument('lastName',InputArgument::REQUIRED,'last name')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion("Confirmer la création de l'utilisateur? [y,n]",false,'/^(y|j)/i');


        if (!$helper->ask($input,$output,$question)) {
            return 0;
        }

        $email = $input->getArgument('email');
        $password = $input->getArgument('password');
        $firstName = $input->getArgument('firstName');
        $lastName = $input->getArgument('lastName');

        $user = new User();
        $hashedPassword = $this->passwordEncoder->encodePassword($user,$password);
        $user->setEmail($email);
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_ADMIN']);
        $user->setLastName($lastName ??'');
        $user->setFirstName($firstName ??'');

        try {
            $this->entityManager->persist($user);
            $this>$this->entityManager->flush();

        }catch (\Exception $e){
            $io->error('error occured :'.$e->getMessage());
            return 0;
        }
        $io->success('new admin user has been created');
        return 0;

    }
}
